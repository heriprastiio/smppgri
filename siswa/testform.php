<form action="" method="post">
    <table class='table table-hover table-responsive table-bordered'>
        <tr>
            <td>First Name: *</td>
            <td><input type='text' name='firstName' class='form-control' required/></td>
        </tr>
        <tr>
            <td>Last Name: *</td>
            <td><input type='text' name='lastName' class='form-control' required /></td>
        </tr>
        <tr>
            <td>ID Number: *</td>
            <td><input type='text' name='idNumber' class='form-control' required/></td>
        </tr>
        <tr>
            <td>Mobile Number: *</td>
            <td><input type='text' name='mobileNumber' class='form-control' required/></td>
        </tr>
        <tr>
            <td>Email: *</td>
            <td><input type='text' name='email' class='form-control' required /></td>
        </tr>
        <tr>
            <td>Birth Date</td>
            <td><input type='text' name='birthDate' class='form-control' required/></td>
        </tr>
        <tr>
            <td>Language</td>
            <td>

                <select class="form-control required" name="languageType" required>

                    <option>Select One...</option>
                    <option>Afrikaans</option>
                    <option>English</option>
                    <option>Zulu</option>
                    <option>Xhosa</option>
                    <option>Venda</option>
                    <option>French</option>

                </select>
            </td>
        </tr>
        <tr>
            <td>Interest</td>
            <td>

                <select class="form-control" name="interest" required>

                    <option>Select One...</option>
                    <option>Golf</option>
                    <option>Rugby</option>
                    <option>Tennis</option>
                    <option>Cricket</option>
                    <option>Swimming</option>
                    <option>Hiking</option>
                    <option>Surfing</option>
                    <option>Movies</option>
                    <option>Swords</option>

                </select>

            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type='submit' name='submit' value='Save' class='btn btn-primary' />
                <a href='../hiddenfile/index.php' class='btn btn-danger'>Back to view members</a>
            </td>
        </tr>
    </table>
</form>