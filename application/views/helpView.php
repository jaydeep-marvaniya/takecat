<div style="padding:40px;">
        <h2>How to use Web Interface</h2>
        <p style="text-align:justify;padding:20px;"> For using web interface, users need to have a client application (a web browser) in their Computers. Web interface does not require any specific Web browser.
            One of the popular browsers "Mozilla Firefox" can be downloaded from 
            http://www.mozilla.org/en-US/products/download.html.<br>
            After installing Firefox web browser, go to URL bar by pressing "ctrl+L" or by using mouse 
            pointer. Enter the URL on which takeCAT is hosted. For example it could be "www.takecat.com"
            Web page that you see now is the home page of takeCAT. Users can see the login option on the login page as shown in the above figure. Entering the Username and password, click on the "submit" and then you will be redirected to the users home page. Every authenticate users enters unique username and password of their choice. For the security purposes, users can not create new account. In case, users forget their password, a new password will be mailed to user's stored email address.
            After logging in the system and depending on the type of user, user will be able to see user's home page having various navigations like shown in the following figure. 
            Type of Users are: Admin, Registered user(professor and student), user with only passkey. 
            Navigations for Admin:<br>
            Navigations for Professor:<br>
            Navigations for Student2:<br>
            Navigations for Student1: Take Test.<br>
        </p>

        <h2>How to get known to the software</h2>
        <p style="text-align:justify;padding:20px;"> If the user is new to the software then, there are two options for getting known to the software. When User logins he gets a page with the navigations for a Demo test, Trip to software (video), and skip this step. This page looks like:
        Demo test shows the procedure to proceed for the test.
        Trip to software shows a video, which tells about how to use the software irrespective of what type of user you are.
        If user already knows how to use the software then he can simply skip this step. </p>
        <h2> How to use Profile</h2>
        <p style="text-align:justify;padding:20px;"> When users login into their account, there is a dropdown button on right side as shown below:<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r1.jpg" style="height=300px;width:600px;padding:40px 200px;"/><br>
        Clicking on the profile in drop down menu, we get a page containing user's personal information. Users will be able to change their profile information, without including administrator in the activity. Information like UserID is unchangeable. These are the information which is updated by administrator. User can change their Username, name, Date of birth, password and email address.
        Every modifiable field is given an edit button, clicking that will convert the specific field in editable form and users will be able to change the required field. This is shown below<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r2.jpg" style="height=300px;width:600px;padding:40px 200px;"/><br></p>
        <h2> How to use Account Settings</h2>
        <p style="text-align:justify;padding:20px;"> When users login into their account, there is a dropdown button on right side as shown<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r2.jpg" style="height=300px;width:600px;padding:40px 200px;"/><br>
        Clicking on the Account Settings in drop down menu, we get a page containing user's account information. Users will be able to change their account information. Information like name, username is unchangeable. User can change their password, email address and manage their account.
        Changing password and email address will not need administrator's intervention.
        If user wants to delete their account, they can do it by simply clicking on delete account in front of manage account. It sends a request to the admin, to delete a particular account. 
        NOTE: If administrator deletes the account then all the user data is deleted
        Every modifiable field is given an edit button, clicking that will convert the specific field in editable form and users will be able to change the required field. 
        </p>
        <h2> How to use Delete User</h2>
        <p> When Admin login into their home page (shown above), user finds Delete user button.
        This navigation is only shown to the Admin. Admin user can delete a user if a delete request comes to him. If it is done, it removes all the data and information related to the user account to be deleted. This is shown below<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r2.jpg" style="height=300px;width:600px;padding:40px 200px;"><br></p>
        <h2> How to use Add Question Bank</h2>
        <p style="text-align:justify;padding:20px;"> To add a new question bank, the examiner will select the "Add Question Bank" option from the navigation bar. The following window will open:<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r3.jpg" style="height=300px;width:600px;padding:40px 200px;"/><br>
        The examiner will enter the name of the question bank and select the question bank file from the computer and will click the submit button. The csv or excel file will be uploaded then and question bank will be created. <br></p>
        <h2>How to use Edit Question Bank</h2>
        <p style="text-align:justify;padding:20px;"> To edit a question bank the examiner will select the "Edit/delete question bank" option from the navigation bar choose the edit option from the window that appears. 
        The question bank can be edited in two ways: the first way is to upload the csv or excel file. The following window appears for uploading the file:<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r3.jpg" style="height=300px;width:600px;padding:40px 200px;"/><br>
        The second way of editing the question bank is to specifically choose a question bank from the drop down menu and then edit the specific questions and their respective parameters. This is shown in the following window:<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r6.png"style="height=300px;width:600px;padding:40px 200px;"/><br></p>
        <h2> How to use Edit/Delete Question Bank</h2>
        <p style="text-align:justify;padding:20px;"> To edit a question bank the examiner will select the "Edit/delete question bank" option from the navigation bar choose the delete option from the window that appears. It is shown as follows:<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r7.png" style="height=300px;width:600px;padding:40px 200px;"/><br>
        Then choose a specific question bank from the list, click on the red button corresponding to it and it will be deleted from the database.</p>
        <h2> How to use Add test</h2>
        <p style="text-align:justify;padding:20px;"> User can add test by clicking on Add test navigation button in user's home page. This will navigate user to the database of Question banks. User can select a question bank by clicking on it, this will navigate user to the test details page, in which user will have to enter the test details like test name, test availability,  visibility(public/protected), timelimit, Timestamp, maximum score, minimum score to pass, start theta, end theta, stopping criteria.<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r8.png" style="height=300px;width:600px;padding:40px 200px;"/><br>
        When user sets visibility to protected, he/she can invite some other users by uploading a .csv/excel file of email addresses. This is shown below:<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r4.png" style="height=300px;width:600px;padding:40px 200px;"/><br>
        In this manner user can set a test for some group of students.</p>
        <h2> How to make Question Bank</h2>
        <p style="text-align:justify;padding:20px;">Because of some content balancing issues catR does not provide support to external data sets but it gives some internal data sets which we can use as per our need.<br> 
Suppose, you want to generate a 1PL question bank where you theta is varying from -4 to +4 and the number of questions are 500, first you would have to get the table of the parameters (here difficulty) from catR.
To install R follow the following instructions:<br><br>
 Installation details of R for Linux system<br>
Run the following command on the terminal to install P package:<br>
sudo apt-get update<br>
sudo apt-get install r-base<br><br>

To compile the R package, run the following command:<br>

sudo apt-get install r-base-dev<br>

To open the R console type "R" on the terminal.<br>
Now we need to install few CRAN packages like catR, sfsmisc.<br>
Type install.packages("package name", .Library)<br>
Choose a CRAN mirror (preferably USA (CA 1))<br><br>
If it prompts that .Library is not writable asks to choose your own directory then first press n.
Then type <br>
Install.packages("package name". lib="path to your directory")<br>

In this case you would have to load the packages whenever you want to use it like<br>

library("package name", lib.loc="path to your directory") #your path<br><br>

Installation details of R for windows system<br>
1. Download R package from the link http://cran.r-project.org/bin/windows/base/<br>
2.  Run the .exe file, R will be installed in your system.<br>
3.  We need to install few CRAN packages like catR, sfsmisc<br>
Type install.packages("package name", .Library)<br>
Choose a CRAN mirror (preferably USA (CA 1))<br>
If it prompts that .Library is not writable asks to choose your own directory then first press n.
Then type <br>
Install.packages("package name". lib="path to your directory")<br>

In this case you would have to load the packages whenever you want to use it like<br>

library("package name", lib.loc="path to your directory") #your path<br><br>

Type this on the R console:<br>
Bank <-createItemBank(no. of questions, modal, thetamin, thetamax)<br>
Bank$item
Eg. Bank<-createItemBank(500, "1PL", -4, 4)<br>
Output would be a table with questions. Copy the parameters in some excel file and set your questions according to the difficulty which goes from -1 to 1. 
(p.s. simple way in the case of 1PL is of doing this is to sort the difficulty parameter(b) colomn alone  set the questions accordingly and then sort the whole table according to the item number field.) 
Here as you can see that we have removed the item number afterwards and added uids to all the questions. The patter for setting uid is that you would be given the number of your question bank, multiply it by 10000000 and add the item number of the question into it. 
Create the file accordingly and save it as csv. Now while making the question bank on the site when you are asked to upload the csv file upload it(do make sure that the file is in proper format with all the fields in line as per the given example xls file to get expected output.)while creating the question bank on the site you would have to pass the same number of questions and that you have in your bank (in csv) and the model that you have used and while creating a test from a particular question bank you would have to pass the same theta range.
<br>
You would be able to edit the questions and answers afterward but parameters cannot be changed. 
<br>
This is sort of limitation of catR which we will try to solve in future and when this will be done examiner will be able to generate question bank as he wishes.</p>
        <br><h2> How to use Edit test</h2>
        <p style="text-align:justify;padding:20px;"> The user selects the "Edit test" option from the navigation bar. A test can be edited in two ways, the first way is to upload a csv or excel file and the second way is to choose a specific test and edit its parameters. It is shown below:<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r4.png" style="height=300px;width:600px;padding:40px 200px;"/><br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r8.png" style="height=300px;width:600px;padding:40px 200px;"/><br></p>
        <h2> How to use Take test </h2>
        <p style="text-align:justify;padding:20px;"> User can take test by clicking on Take test navigation button in user’s home page. Loading of next page depends on the type of user. If the user is of type Student1 then he/she will be straightaway directed to the test details page which will look as : <br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/r5.png" style="height=300px;width:600px;padding:40px 200px;"/><br>
        And then, when take test button on the bottom of the page is clicked, the test page is loaded which will look as<br>
        <img src="<?php echo $this->config->base_url(); ?>assets/Images/tests.jpg" style="height=300px;width:600px;padding:40px 200px;"" alt="image yet to be added"/><br>
      
        After selecting one test, user can click take test button which will navigate user to the test page as shown above.</p>
        <h2> How to make .csv file</h2>
        <p style="text-align:justify;padding:20px;"> To make a .csv file add the data column-wise separated by a "," in an excel file and save it with .csv extension.
        •   To make a .csv file for question bank, following columns should be added.
        Question no., question statement, option1, option2, option3, option4, answer, a, b, c, d.
        •   To make a .csv file for add test, following columns should be added.
        Availability, From, Until, Start theta, End theta, Minimum score needed to pass the test, time limit, minimum number of questions, test description.</p>
    </div>
