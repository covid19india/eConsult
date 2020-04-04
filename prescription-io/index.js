let express = require("express");
let app = express();
let ejs = require("ejs");
let pdf = require("html-pdf");
let path = require("path");

let footer = "<p style=\"color:#777777; text-align:center; font-size:7pt\">\
Disclaimer: This prescription is based on the information provided by you in an online consultation and not on any physical verification. \
Visit a doctor in case of emergency. This prescription is valid in India only. \
<p>" 

app.use(express.json());
app.listen(3000);
app.post("/generateReport", (req, res) => {
    var details = req.body;
    ejs.renderFile(path.join(__dirname, './views/', "prescription-template.ejs"), {details: details}, (err, data) => {
    if (err) {
	  console.log(err);
          res.send(err);
    } else {
        let options = {
            "height": "11.25in",
            "width": "8.5in",
            "header": {
                "height": "10mm",
            },
            "footer": {
                "height": "25mm",
                "contents": footer
            },
        };
        var file_name = "prescription-" + details.prescription.id + ".pdf";
        pdf.create(data, options).toFile(file_name, function (err, data) {
            if (err) {
                res.send(err);
            } else {
                res.download("./"+file_name);
            }
        });
    }
});
})

