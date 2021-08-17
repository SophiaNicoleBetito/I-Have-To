<!DOCTYPE html>
<html>
    <head>
        <title> I Have To ... </title>
        <link rel="stylesheet" href = "style.css"/>
    </head>

    <body>
        <div class="form">
            <form action = "javascript:void(0);" method = "POST" onsubmit = "app.Add()" action = "index.php"> 
              <input type = "text" id = "add-todo" placeholder = "Thing To-Do">
              <input type = "submit" value = "Add" class = "btn btn-primary">
            </form>
            <p>You Have: </p>
            <p id="counter"></p>
      
            <table>
            <tr class="to-do">
                <th><h3>To-Do:</h3></th>
            </tr>
                <tbody id="tasks">
                </tbody>
            </table>
        </div>
      
        <div id="edit-box" role="aria-hidden">
            <form action="javascript:void(0);" method="POST" id="save-edit">
              <input type="text" id="edit-todo">
              <input type="submit" value="Save" class="btn btn-success"/> <a onclick="CloseInput()" aria-label="Close">&#10006;</a>
            </form>
        </div>
    </body>

    <script src="script.js"></script>
</html>