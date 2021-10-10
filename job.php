<?php include './includes/head.php' ?>
<?php include './includes/header.php' ?>

<main>
    <section id="job">
        <div class="job">
            <div class="leftJob">
                <h1><b style="color: red;">Job Seeker</b> <br>Application!</h1>
                <form action="" method="post">
                    <p><input class="jobInput" type="text" placeholder=" Your FullName: " required /></p>
                    <p><input class="jobInput" type="text" placeholder=" What is your Address? " required /></p>
                    <p>
                        <select class="jobInput" type="text"> 
                            <option value=""> What type of work are you looking?</option>
                            <option value="">General Labour Light</option>
                            <option value="">Millwright</option>
                            <option value="">Information Technology</option>
                            <option value="">Costumer Services</option>
                            <option value="">AZ Driver</option>
                            <option value="">DZ Driver</option>
                            <option value="">G Licensed Driver</option>
                            <option value="">Team Lead/ Supervisor</option>
                            <option value="">Sales Marketing</option>
                            <option value="">CNC Operator</option>
                            <option value="">Machine Operator</option>
                        </select>
                    </p>
                    <p>
                        <select class="jobInput" type="text"> 
                            <option value=""> Please tell us your availibility: </option>
                            <option value="morning">Morning Shift: 7:00 AM - 4:00 PM</option>
                            <option value="afternoon">Afternoon Shift: 4:00 PM - 1:00 AM</option>
                            <option value="evening">Evening Shift: 1:00 AM - 10:00 AM</option>
                        </select>
                    </p>
                    <p>
                        <select class="jobInput" type="text"> 
                            <option value=""> Do you have your own vehicle? </option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </p>
                    <p><a><input class="btnJob" value="CONTINUE" /></a></p>
                </form>
            </div>
            <div class="rightJob">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2881.4675660037506!2d-79.21000838449865!3d43.76315217911778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4d070fd0a70a3%3A0xf0219afbbf10e7e7!2s3895%20Lawrence%20Ave%20E%2C%20Scarborough%2C%20ON%20M1G%203T3!5e0!3m2!1sen!2sca!4v1633704314854!5m2!1sen!2sca" width="450" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>

    </section>
</main>
<?php include './includes/footer.php' ?>