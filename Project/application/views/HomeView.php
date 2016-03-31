<!DOCTYPE HTML>
<html>
    <head>
        <title>USC Staff Directory</title>
    </head>
    <body>
        <h1>Staff Directory</h1>
        <h3><a href="LoginController">Login</a><br/></h3>

        <style>
    table, th, td{
        padding: 5px;
        text-align: left;
        border-collapse: collapse;
        border: 1px solid black;
        background-color: #ffffcc;
    }
    caption{
        font-weight: bold;
        font-size: x-large;
        padding: 5px;
        text-align: center;
        border-collapse: collapse;
        border: 1px solid black;
        background-color: #ffffcc;
    }
</style>

        <table>
            <caption>Staff</caption>
            <tr>
                <th>Title</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Position</th>
                <th>Department</th>
                <th>Email</th>
                <th>Office</th>
                <th>Phone No.</th>
                <th>Description</th>
            </tr>
            <tbody></tbody>
            <?php foreach ($records as $r): ?>
                <tr>
                    <td><?php echo $r->Title; ?></td>
                    <td><?php echo $r->FirstName; ?></td>
                    <td><?php echo $r->LastName ?></td>
                    <td><?php echo $r->Position; ?></td>
                    <td><?php echo $r->Department; ?></td>
                    <td><?php echo $r->Email; ?></td>
                    <td><?php echo $r->Office; ?></td>
                    <td><?php echo $r->PhoneNo; ?></td>
                    <td><?php echo $r->Description; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>