# Bot-Doctor


## Concept

A standalone bot which sends a acceptance notification followed by a group invite to a Doctor. 

## Workflow

Doctor ID received from Classifier-Selector as parameters
--> Bot Sends a NotificationMessage with options Accept [✅] or Pass[💤] to Doctor bearing same ID

[✅]
--> Doctor receives a group link, where doctor chats with patient.
--> End

[💤]
--> Deletes NotificationMessage
--> End

