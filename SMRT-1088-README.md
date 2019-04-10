# Add password reset form to Joomla

Need a super user

## 1. Build form Component

Follow the menu: Components > RSForms! Pro > Manage Forms

Select the Contact Us Form's checkbox and click the duplicate button
Edit the copied form

Form properties 
    
- form info 
  - Form Title: `Reset Password`
  - Form Name: `reset-password-form`
  - edit Thank You message: `We will review your password reset request and get back to you as soon as we can.`
- admin email -> contacts
  - edit subject: `New password reset request!`
  - edit to: `rajones@hntb.com, smillard@hntb.com, johnson.denen@accenture.com, katherine.robinson@accenture.com, rob.hermancemoore@accenture.com, eric.flecher@accenture.com, brian.l.balser@accenture.com, boyapati@battelle.org, jacob.i.clark@accenture.com, tammy.l.chellis@accenture.com, mackenzie.a.king@accenture.com`
  - edit message:    
      ```
      Hi,

      The following person has submitted a password reset request:


      {Email:caption}
      {Email:value}


      Thanks,
      ```
- form fields
  - email
  - verification
  - submit button -> edit, change name to: `Submit`

## 2. Modules - Copy "Contacts Us Module"

edit 
- title: `Reset Password`
- form select: `reset-password-form`

save
publish

## 3. SP Page Builder

Open Contact Us on save dropdown use "Save as Copy" to duplicate

Edit:
- Header's Admin Label and Title: `Reset Password`
- Text Block
  - Admin Label: `Reset Password Intro`
  - Content: `Enter your email to request a new password`
  - Content - Select all text - Center Align Text 
- Row -> Joomla Module -> Edit
  - Admin Label: `RS Reset Password`
  - Module Select: `Reset Password`

Save Page


## 4. Menu Item

Edit "Contact Us" Save as Copy
- Menu Title:  `Reset Password`
- Alias: `reset-password`
- Page: `Reset Password`

Link Type
- Display in Menu "No"

Edit Metadata
- Meta Description: (empty)
- Meta Keywords: `reset password, Smart Columbus Operating System, scos, open data platform, city mobility data, smart city`

Save/Publish
