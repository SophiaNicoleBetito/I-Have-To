<!DOCTYPE html>
<html>
    <head>
        <?php include "db.php"; ?>
        <title>ToDo List Application PHP and MySQL</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <div class="heading">
            <h2 style="font-style: 'Hervetica';">ToDo List Application PHP and MySQL database</h2>
        </div>
        
        <form method="post" action="index.php" class="input_form">
            <?php if (isset($errors)) { ?>
                <p><?php echo $errors; ?></p>
            <?php } ?>

            <input type="text" name="task" class="task_input">
            <button type="submit" name="submit" id="add_btn" class="add_btn">Add Task</button>
        </form>

        <table style="text-align:center;">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tasks</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    // select all tasks if page is visited or refreshed
                    $list = mysqli_query($con, "SELECT * FROM list");

                    $i = 1; while ($row = mysqli_fetch_array($list)) { ?>
                    <tr>
                        <td> <?php echo $i; ?> </td>

                        <!--task printing-->
                        <td class="task"> <?php echo $row['task']; ?> </td>

                        <!--Edit button-->
                        <td> 
                            <a href="index.php?edit_task=<?php echo $row['id'] ?>" >
                            <button type="submit" name="submit" id="add_btn" class="add_btn"> Edit </button> </a> 
                        </td>
                        
                        <!--Delete button-->
                        <td> 
                            <a href="update.php?del_task=<?php echo $row['id'] ?>"> 
                            <button type="submit" name="submit" id="add_btn" class="add_btn"> Delete </button> </a> 
                        </td>
                    </tr>
                <?php $i++; } ?>	
            </tbody>
        </table>
    </body>
</html>