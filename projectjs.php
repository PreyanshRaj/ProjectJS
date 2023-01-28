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
</head>
<body>
    <?php include("C:\xampp\htdocs\VSWeb\index.php");
    ?>
    <!-- Manager Registration -->
    <form id="registerForm" action="" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="register" value="Register">
    </form>

    <!-- Manager Login -->
    <form id="loginForm" action="" method="POST">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" name="login" value="Login">
    </form>

    <!-- Add Project -->
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

    <!-- List of Projects -->
    <form id="viewProjectsForm" action="" method="POST">
        <input type="submit" name="view_projects" value="View Projects">
    </form>

    <!-- Edit Project -->
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

    <!-- Delete Project -->
    <form id="deleteProjectForm" action="" method="POST">
        <input type="text" name="project_id" placeholder="Project ID">
        <input type="submit" name="delete_project" value="Delete Project">
    </form>

    <!-- Change Project Status -->
    <form id="changeProjectStatusForm" action="" method="POST">
        <input type="text" name="project_id" placeholder="Project ID">
        <input type="text" name="project_status" placeholder="Project Status">
        <input type="submit" name="change_project_status" value="Change Project Status">
    </form>
</body>
</html>