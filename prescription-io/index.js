let express = require("express");
let app = express();
let ejs = require("ejs");
let pdf = require("html-pdf");
let path = require("path");

let details = {
    doctor: {
        name: "Dr. Vidhan C Doshi",
        details: "MBBS, MS - Opthalmology",
        registration_number: "2011/02/0192",
        location: "Mumbai",
    },

    patient: {
        name: "Vibhor Kanojia",
        age: "26",
        gender: "Male",
        location: "Pune",
    },

    prescription: {
        issued_on: "02/04/2020",
        id: "12345",
        presenting_complaints: "Sore throat, mild fever, chest pains",
        provisional_diagnosis: "Symptoms of X disease",
        additional_remarks: "Gargle with salt water, drink hot water, wash hands. Avoid contact with other people, stay at home, and visit a doctor in case of breathing issues.",
        follow_up_advice: "Like, share and subscribe.",
        medicines: [
                {
                    name: "Medicine 1",
                    frequency: "3",
                    span: "2",
                    usage: "After the meal",
                },
                {
                    name: "Medicine 2",
                    frequency: "2",
                    span: "3",
                    usage: "Before the meal",
                },
                {
                    name: "Medicine 3",
                    frequency: "1",
                    span: "3",
                    usage: "Before breakfast",
                },
                {
                    name: "Medicine 4",
                    frequency: "1",
                    span: "2",
                    usage: "Before sleeping",
                },
            ],
    },
};

let footer = "<p style=\"color:#777777; text-align:center; font-size:7pt\">\
Disclaimer: This prescription is based on the information provided by you in an online consultation and not on any physical verification. \
Visit a doctor in case of emergency. This prescription is valid in India only. \
<p>" 

app.get("/generateReport", (req, res) => {
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
        pdf.create(data, options).toFile("report.pdf", function (err, data) {
            if (err) {
                res.send(err);
            } else {
                res.send("File created successfully");
            }
        });
    }
});
})

app.listen(3000);
