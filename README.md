# **eConsult –** Free Medical Consultations by Volunteering Doctors

**What is the pain-point that we are trying to solve here?**

COVID-19 in not the only ailment that citizens are having right now. All other diseases still exist. Right now, access to hospitals and doctors are extremely constrained. Other than emergencies, cases are not entertained in hospitals.

Many people can maybe use DocsApp/Practo type applications, but there is a need for pro-bono help for medicine to the entire country.

**What is our scope?**

A good number of certified doctors and the people who are in furlough who would be ready to do give out their time and services, especially in vernacular languages.

A huge number of patients who need help with ailments which does not require hospitalization.

**List of Modules planned (tentative):**

- Patient Onboarding and Verification (Truecaller Login)
- Doctor Onboarding and Verification (Truecaller Login + IMR ID Number + Hospital ID Card/Clinic Prescription\*)
- A Redis\*\* based DB to store Profiles of Patients and Doctors.
- A Classifier which assigns cases to doctors based on Patient&#39;s requirement and availability.
- A Bot which notifies a Doctor selected by Classifier with link to join chat with Patient.
- A Prescription Generator which feeds on metadata from Doctor and Patient&#39;s Profile and adds digital signature of Doctor.
- A Dialogflow Bot powered by smart intents integrating all of the above in a conversational flow, starting with onboarding/consultation and ending with generated prescription, for the Patient.
- A feature of the Dialogflow Bot to assess risk of nCOVID contraction and issue general advisory.
- A webpage with the Dialogflow Bot embedded in it.

\*currently done manually. Reference: [https://www.mciindia.org/CMS/information-desk/indian-medical-register](https://www.mciindia.org/CMS/information-desk/indian-medical-register)

\*\* yet to be finalized
