<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<body>

    <h1>Buat Akun Baru</h1>

    <h3>Sign Up Form</h3>

    <br>

    <form action="welcome" method="POST">
    @csrf

        <label>First name :</label> <br><br>
        <input type="text">

        <br><br>

        <label>Last name :</label> <br><br>
        <input type="text">

        <br><br>

        <label>Gender :</label> <br><br>
        <input type="radio" name="gender"><label>Male</label><br>
        <input type="radio" name="gender"><label>Female</label><br>
        <input type="radio" name="gender"><label>Other</label>

        <br><br>

        <label>Nationality :</label><br><br>
        <select>
            <option>Indonesia</option>
            <option>Singapore</option>
            <option>Malaysia</option>
            <option>Australia</option>
        </select>

        <br><br>

        <label>Langgue Spoken :</label><br><br>
        <input type="checkbox"><label>Bahasa Indonesia</label><br>
        <input type="checkbox"><label>English</label><br>
        <input type="checkbox"><label>Other</label>

        <br><br>

        <label>Bio :</label><br><br>
        <textarea cols="30" rows="6"></textarea>

        <br><br>

        <button type="submit">Sign Up</button>

    </form>

</body>
</html>
