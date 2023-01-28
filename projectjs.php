<!DOCTYPE html>
<html>
<head>
    <title>Program Attributes</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            // Manager Registration
            $("#registerForm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: $("#registerForm").serialize(),
                    success: function(response){
                        alert(response);
                    }
                });
            });

            // Manager Login
            $("#loginForm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: $("#loginForm").serialize(),
                    success: function(response){
                        alert(response);
                    }
                });
            });

            // Add Project
            $("#addProjectForm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: $("#addProjectForm").serialize(),
                    success: function(response){
                        alert(response);
                    }
                });
            });

            // List of Projects
            $("#viewProjectsForm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: $("#viewProjectsForm").serialize(),
                    success: function(response){
                        alert(response);
                    }
                });
            });

            // Edit Project
            $("#editProjectForm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: $("#editProjectForm").serialize(),
                    success: function(response){
                        alert(response);
                    }
                });
            });

            // Delete Project
            $("#deleteProjectForm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: $("#deleteProjectForm").serialize(),
                    success: function(response){
                        alert(response);
                    }
                });
            });

            // Change Project Status
            $("#changeProjectStatusForm").submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    data: $("#changeProjectStatusForm").serialize(),
                    success: function(response){
                        alert(response);
                    }
                });
            });
        });
    </script>
    <style>
        body{
            background: #ADD8E6;
        }
        .sec1 .sec2 .sec3 .sec4 .sec5 .sec6 .sec7{
            width: 100%;
            height: auto;
            font-size: 50px;
        }
        p{
            font-size: larger;
        }
        h1{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php include("C: mpp\htdocs\VSWeb\index.php");
    ?>
    <h1>Project Management Portal.</h1>
    <!-- Manager Registration -->
    <section class="sec1">
        <p>Registration Section.</p>
        <form id="registerForm" action="" method="POST">
            <input type="text" name="name" placeholder="Name">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="register" value="Register">
        </form>
    </section>

    <!-- Manager Login -->
    <section class="sec2">
        <p>Login Section.</p>
        <form id="loginForm" action="" method="POST">
            <input type="text" name="email" placeholder="Email">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" name="login" value="Login">
        </form>
    </section>

    <!-- Add Project -->
    <section class="sec3">
        <p>New Project addition Section.</p>
        <form id="addProjectForm" action="" method="POST">
            <input type="text" name="project_name" placeholder="Project Name">
            <input type="text" name="project_description" placeholder="Project Description">
            <input type="file" name="project_prototype" placeholder="Project Prototype">
            <input type="date" name="project_start_date" placeholder="Project Start Date">
            <input type="date" name="project_deadline" placeholder="Project Deadline">
            <input type="text" name="project_manager" placeholder="Project Manager">
            <input type="text" name="project_developer" placeholder="Project Developer">
            <input type="text" name="project_status" placeholder="Project Status">
            <input type="submit" name="add_project" value="Add Project">
        </form>
    </section>

    <!-- List of Projects -->
    <section class="sec4">
        <p>View Project Section.</p>
        <form id="viewProjectsForm" action="" method="POST">
            <input type="submit" name="view_projects" value="View Projects">
        </form>
    </section>

    <!-- Edit Project -->
    <section class="sec5">
        <p>Edit Project Section.</p>
        <form id="editProjectForm" action="" method="POST">
            <input type="text" name="project_id" placeholder="Project ID">
            <input type="text" name="project_name" placeholder="Project Name">
            <input type="text" name="project_description" placeholder="Project Description">
            <input type="file" name="project_prototype" placeholder="Project Prototype">
            <input type="date" name="project_start_date" placeholder="Project Start Date">
            <input type="date" name="project_deadline" placeholder="Project Deadline">
            <input type="text" name="project_manager" placeholder="Project Manager">
            <input type="text" name="project_developer" placeholder="Project Developer">
            <input type="text" name="project_status" placeholder="Project Status">
            <input type="submit" name="edit_project" value="Edit Project">
        </form>
    </section>

    <!-- Delete Project -->
    <section class="sec6">
        <p>Project Deletion Section.</p>
        <form id="deleteProjectForm" action="" method="POST">
            <input type="text" name="project_id" placeholder="Project ID">
            <input type="submit" name="delete_project" value="Delete Project">
        </form>
    </section>

    <!-- Change Project Status -->
    <section class="sec7">
        <p>Project Changing Section.</p>
        <form id="changeProjectStatusForm" action="" method="POST">
            <input type="text" name="project_id" placeholder="Project ID">
            <input type="text" name="project_status" placeholder="Project Status">
            <input type="submit" name="change_project_status" value="Change Project Status">
        </form>
    </section>
</body>
</html>