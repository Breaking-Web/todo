<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Simple To Do List</title>
    <!-- JQuery & JQuery UI -->
    <script src="jquery/jquery-1.5.min.js"></script>
    <link  href="jquery/jquery-ui-1.8.css" rel="stylesheet" type="text/css"/>
    <script src="jquery/jquery-ui-1.8.min.js"></script>
    <script type="text/javascript" src="todo.js"></script>
    <link rel="stylesheet" type="text/css" href="todo.css" />
 </head>
  <body>
    <div id="log">Starte Log</div>
    <div id="working">Arbeite...</div>
    <h1>To Do</h1>
    <div id="progress"><span id="progress_done">&nbsp;</span><span id="progress_todo">&nbsp;</span><span id="progress_status">Erledigt: 0% Offen: 0</span></div>
    <form method="POST" onsubmit="return false;" id="inputform">
      <div class="line line_header">
        <span class="todo">Todo <input type="image" src="refresh.png" name="refresh" value="refresh" onclick="refresh()" />
</span><span class="due"> Fällig</span><span class="priority">Priorität</span>
      </div>
      <div class="line line_input">
        <span class="todo"><input type="text" id="todo" name="todo" size="60" maxlength="255" /></span><span class="due"><input type="text" id="due" name="due" size="10" maxlength="20" /></span><span class="priority"><input type="text" id="priority" name="priority" size="3" maxlength="4" /></span><span class="actions"><input type="image" src="Add.png" name="save" value="Speichern" onclick="enter()" /></span>
      </div>
    </form>
    <div id="todoTable">
    </div>
    <div id="modify_dialog" style="display:none;">
      <form method="POST" onsubmit="return false;" id="inputform">
        <input type="hidden" id="modify_id" name="modify_id" />
        <div class="modify_line">
          <span class="modify_desc">Todo: </span>
          <input type="text" id="modify_todo" name="modify_todo" size="60" maxlength="255" />
        </div><div class="modify_line">
          <span class="modify_desc">Fällig: </span>
          <input type="text" id="modify_due" name="modify_due" size="10" maxlength="20" />
        </div><div class="modify_line">
          <span class="modify_desc">Priorität</span>
          <input type="text" id="modify_priority" name="modify_priority" size="3" maxlength="4" />
        </div>
        <input type="image" src="pencil.png" name="modify_save" id="modify_save" value="Speichern" />
      </form>
    </div>
    <div id="log_dialog" style="display:none">
    </div>
  </body>
</html>

