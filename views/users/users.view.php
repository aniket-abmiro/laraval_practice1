<?php



foreach ($users as $user){
    echo "<li>".htmlspecialchars($user['email'])." => ".$user['password']."</li>";
}
?>
<br>
<br>

<form method ="POST">
<input type="hidden" name ="_method" value="DELETE">
<input type="hidden" name="id" value="3">
<button> Delete </button>
</form>

<br>
<br>
<a href = "/user/edit?id=6">Edit</a>

<br>
<form action ="/sessions" method ="POST">
<input type="hidden" name ="_method" value="DELETE">

<button> logout </button>
</form>
