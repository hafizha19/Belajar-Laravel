<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pekan 1 Hari 1 Form</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="POST">
    @csrf
        <p>  
            <label for="nama">First Name: </label>
            <input type="text" name="nama" id="nama">
        </p>
        <p>
            <label for="nama2">Last Name:</label>
            <input type="text" name="nama2" id="nama2">

        </p>
        <label for="gender">Gender:</label>
        <p>
            <input type="radio" name="gender" value="Male">Male
        </p>
        <p>
            <input type="radio" name="gender" value="Female">Female
        </p>
        <p>
            <input type="radio" name="gender" value="other">Other
        </p>
        <label for="nat">Nationality:</label>
        <select name="nat">
            <option value="Indonesia">Indonesia</option>
            <option value="Other">Other</option>
        </select>
        <br><br>
        <label for="lang">Language Spoken</label>
        <p>
            <input type="checkbox" name="lang" value="indo"> Bahasa Indonesia
        </p>
        <p>
            <input type="checkbox" name="lang" value="eng"> English
        </p>
        <p>
            <input type="checkbox" name="lang" value="other"> Other
        </p>
        <label for="bio">Bio</label> <br>
        <textarea name="bio" cols="30" rows="10"></textarea>
        <br>
        <button type="submit" value="submit">Sign Up</button>
    </form>
</body>

</html>