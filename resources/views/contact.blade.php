<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - GameHub</title>
    @vite('resources/css/style.css')
</head>
<body>
    <header>
        <h1>Contact Us</h1>
        <p>Your Source for Gaming News</p>
        <nav>
            <ul>
                <li><a href="home">Home</a></li>
                <li><a href="aboutus">About Us</a></li>
                <li><a href="contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h2>Contact Information</h2>
        <p>If you have any questions or would like to get in touch with us, you can reach us through the following contact details:</p>
        <ul>
            <li>Email: <a href="mailto:contact@gamehub.com">contact@gamehub.com</a></li>
            <li>Phone: +1 (555) 123-4567</li>
        </ul>
    </section>

    <section>
        <h2>Contact Form</h2>
        <p>You can also use the contact form below to send us a message:</p>

        <form action="/home" method="post">
            @csrf
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Send</button>
        </form>
    </section>

    <section>
        <h2>Location</h2>
        <p>Find us on the map:</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.5400868767733!2d5.491845087916136!3d51.46660004099248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c6d8d46a1fd9a7%3A0x2683f0238844f87a!2sSumma%20College!5e0!3m2!1snl!2snl!4v1693999117433!5m2!1snl!2snl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <footer>
        <p>&copy; 2023 GameHub</p>
    </footer>
</body>
</html>
