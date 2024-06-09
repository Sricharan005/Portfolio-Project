<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Website</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section id="home">
            <h1>Welcome to My Portfolio Website</h1>
            <p>This is a sample portfolio website showcasing my skills and projects.</p>
        </section>
        <section id="about">
            <h1>About Me</h1>
            <p>I am a web developer with a passion for building innovative and user-friendly applications.</p>
            <p>Here are some of my skills:</p>
            <ul>
                <li>HTML/CSS</li>
                <li>JavaScript</li>
                <li>PHP</li>
                <li>MySQL</li>
            </ul>
        </section>
        <section id="portfolio">
            <h1>Portfolio</h1>
            <p>Here are some of my projects:</p>
            <ul>
                <li>
                    <h2>Project 1: Todo List App</h2>
                    <p>A simple todo list app built using HTML, CSS, and JavaScript.</p>
                    <img src="todo-list-app.png" alt="Todo List App Screenshot">
                </li>
                <li>
                    <h2>Project 2: Weather API</h2>
                    <p>A weather API built using PHP and MySQL.</p>
                    <img src="weather-api.png" alt="Weather API Screenshot">
                </li>
            </ul>
        </section>
        <section id="contact">
            <h1>Get in Touch</h1>
            <p>Feel free to contact me for any questions or collaborations.</p>
            <form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"><br><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email"><br><br>
                <label for="message">Message:</label>
                <textarea id="message" name="message"></textarea><br><br>
                <input type="submit" value="Send">
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 My Portfolio Website</p>
    </footer>
    <script src="script.js"></script>
</body>
</html>
