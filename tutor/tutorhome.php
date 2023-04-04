<!DOCTYPE html>
<?php session_start();
include('include/config.php');
$email=$_SESSION['email'];
$sql="select completed from logint where email='$email'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$value=$row[0];
if($value=="na"){
	header('Location: completeReg.php');
}
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tutor Home</title>
    <link rel="stylesheet" href="index.css" />
  </head>
  <body>
    
    <ul>
      <li><a class="active" href="#home">Home</a></li>
      <li><a href="studentprofile.php">Profile</a></li>
      <li><a href="createcourse.php">Courses</a></li>
      <li><a href="#about">Classes</a></li>
      <li><a href="#about">Chat</a></li>
      <li><a href="#about">Quiz</a></li>
      <li><a href="fileupload.php">Materials</a></li>
      <li style="float:right; "><a href="../student/logout.php" class="logout">Logout</a></li>
    </ul>

    <div class="section" id="course">
      <div class="btcourse">
        <div class="course1">
          <p class="content">
          Welcome to the course creation process! As a tutor, you have the unique opportunity to design and develop a course that reflects your expertise and passion. Creating a course can be a rewarding experience that allows you to share your knowledge and skills with others.

When creating your course, think about your audience and their learning objectives. What do they need to know, and how can you present the material in a way that is engaging and informative? Consider using a variety of teaching methods, including lectures, group activities, and hands-on exercises, to ensure that your course is dynamic and interactive.

As you develop your course content, be sure to organize it in a logical and accessible way. Consider creating a syllabus that outlines the course objectives, reading materials, and assignments. This will help your students stay on track and understand the expectations for the course.

You'll also want to think about the technology and tools you'll need to deliver your course content. This could include creating videos, using online resources, and setting up a virtual classroom. Our team is here to support you and provide you with the resources you need to create a successful course.
          </p>
        </div>
        <div class="button">
          <a href="createcourse.php"><button class="button1">Create Course</button></a>
        </div>
      </div>
      <div class="image1">
        <img src="../images/course.jpg" width="700" height="400" />
      </div>
    </div>
    <div class="section" id="class">
      <div class="image2">
        <img src="../images/class.jpg" height="400" width="680" />
      </div>
      <div class="btclass">
        <div class="class1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button2">Start Class</button></a>
        </div>
      </div>
    </div>
    <div class="section" id="chat">
      <div class="btchat">
        <div class="chat1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button1">Chat</button></a>
        </div>
      </div>
      <div class="image1">
        <img src="../images/chat.png" width="700" height="400" />
      </div>
    </div>
    <div class="section" id="quiz">
      <div class="image2">
        <img src="../images/quiz.jpg" height="400" width="680" />
      </div>
      <div class="btquiz">
        <div class="quiz1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="#"><button class="button2">Start Quiz</button></a>
        </div>
      </div>
    </div>
    <div class="section" id="materials">
      <div class="btmaterial">
        <div class="material1">
          <p class="content">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime
            mollitia, molestiae quas vel sint commodi repudiandae consequuntur
            voluptatum laborum numquam blanditiis harum quisquam eius sed odit
            fugiat iusto fuga praesentium optio, eaque rerum! Provident
            similique accusantium nemo autem. Veritatis obcaecati tenetur iure
            eius earum ut molestias architecto voluptate aliquam nihil, eveniet
            aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur
            error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
            quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias
            eos sapiente officiis modi at sunt excepturi expedita sint? Sed
            quibusdam recusandae alias error harum maxime adipisci amet laborum.
            Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates
            a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius
            fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero
            magni deleniti quod quam consequuntur! Commodi minima excepturi
            repudiandae velit hic maxime doloremque. Quaerat provident commodi
            consectetur veniam similique ad earum omnis ipsum saepe, voluptas,
            hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam
            cupiditate excepturi mollitia maiores labore suscipit quas? Nulla,
            placeat. Voluptatem quaerat non architecto ab laudantium modi minima
            sunt esse temporibus sint culpa, recusandae aliquam numquam totam
            ratione voluptas quod exercitationem fuga. Possimus quis earum
            veniam quasi aliquam eligendi, placeat qui corporis!
          </p>
        </div>
        <div class="button">
          <a href="fileupload.php"><button class="button1">Upload Materials</button></a>
        </div>
      </div>
      <div class="image1">
        <img src="../images/book.jpg" width="700" height="400" />
      </div>
    </div>
  </body>
</html>
