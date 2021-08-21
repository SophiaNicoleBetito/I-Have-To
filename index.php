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


            <?php if ($update == true): ?>
                <input type="text" name="task" class="task_input" value = "<?php echo $task; ?>">
                <button type="submit" name="submit" id="add_btn" class="add_btn"> Update </button>

            <?php else: ?>
                <input type="text" name="task" class="task_input" value = "<?php echo $task; ?>" placeholder = "Add Task">
                <button type="submit" name="submit" id="add_btn" class="add_btn"> Save </button>
            <?php endif; ?>
        </form>

        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tasks</th>
                    <th style="width: 60px;">Action</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    // select all tasks if page is visited or refreshed
                    $list = mysqli_query($con, "SELECT * FROM list");

                    $i = 1; while ($row = mysqli_fetch_array($list)) { ?>
                    <tr>
                        <!--task printing-->
                        <td> <?php echo $i; ?> </td>
                        <td class="task"> <?php echo $row['task']; ?> </td>

                        <!--Edit button-->
                        <td class="edit"> 
                            <a href="index.php?edit=<?php echo $row['id'] ?>"> Edit </a> 
                        </td>

                        <!--Delete button-->
                        <td class="delete"> 
                            <a href="index.php?del=<?php echo $row['id'] ?>"> Delete </a> 
                        </td>
                    </tr>
                <?php $i++; } ?>	
            </tbody>
        </table>
    </body>
</html>