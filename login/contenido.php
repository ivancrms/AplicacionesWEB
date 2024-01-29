<?
//aquí tendremos que iniciar sesión y comprobar que hay un username almacenado en la sesión
//si lo hay podemos mostrar el contenido privado
//en caso contracio usaremos la función header("Location: login.php");º para redirigir al usuario
//al login
session_start(); 

if (isset($_SESSION['username'])) {
    echo "<h1>Hola, " . $_SESSION['username'] . "</h1>";
    echo "Esta es la páginade contenido que se abre cuando el usuario inicia sesion"
?>

<a href="cerrarsesion.php">Cerrar sesion </a>

<?
} else {
    header("Location: login.php");
}
?>