<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Frontend vs Backend</title>
<link rel="stylesheet" href="styles/style.css">
</head>
<body>
<div class="container">
    <h1>Frontend vs Backend Web Development</h1>
    <div class="content">
   
        <p>Think of a website like a house. The front end is what you see and interact with as a visitor, similar to the appearance and layout of a house. It includes the design, layout, colors, buttons, text, and images you see on a website.<br>
         Front end developers use languages like HTML, CSS, and JavaScript to create these elements and make them work together smoothly.<br> Now, imagine the back end as the infrastructure of the house, the plumbing, electrical systems, and foundation that support everything.<br>
         It's the part of the website you don't see directly but is essential for the site to function properly. Back end developers work on server-side programming, databases, and server management.<br>
          They ensure that when you interact with the front end (like filling out a form or making a purchase), everything works behind the scenes to process your request, retrieve information from databases, and provide the appropriate response.<br>
           In simpler terms, front end developers focus on what you see and interact with on a website, while back end developers work on the behind-the-scenes functionality that makes everything work smoothly. Both are crucial for creating a functional and user-friendly website.</p>
           <img src="huis.svg">
           <p>Frontend development involves everything that users interact with directly on a website, including:</p>
        <ul>
            <li>Design</li>
            <li>Layout</li>
            <li>Colors</li>
            <li>Buttons</li>
            <li>Text</li>
            <li>Images</li>
        </ul>
           <button id="showFrontend">Show Frontend Example</button>
        <div id="frontendExample" class="example hidden">
            <p>animation</p>
        
        </div>
          <p>Backend development involves the server-side of web development, which users don't directly interact with. It includes:</p>
        <ul>
            <li>Server-side programming</li>
            <li>Database management</li>
            <li>Server management</li>
        </ul>
        <p>Backend developers use languages like PHP, Node.js, Python, etc., to create the backend logic of a website.</p>
        <button id="showBackend">Show Backend Example</button>
        <div id="backendExample" class="example hidden">
            <p>This is an example of a backend process:</p>
            <div class="backendElement">
           
            </div>
        </div>
    </div>
</div>
<script src="script.js"></script>
</body>
</html>
