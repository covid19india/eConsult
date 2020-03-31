## Concept

A standalone bot which sends a acceptance notification followed by a group invite to a Doctor. 

## Workflow

*DoctorID* received from **classifier-selector** as a parameter.
--> Bot Sends a *NotificationMessage* with options 
**Accept** [✅] or **Pass**[💤] to Doctor bearing same ID


[✅]
--> Doctor receives a group link, where doctor chats with patient.
--> End of Life

[💤]
--> Deletes *NotificationMessage*
--> End of Life
