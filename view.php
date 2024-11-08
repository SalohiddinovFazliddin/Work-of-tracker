<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work of Tracker</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-warning-subtle">
    <div class="container bg-warning-subtle">
        <h1 class="text-danger text-center">Work of Tracker</h1>
        
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Ism</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Ismingizni kiriting">
            </div>
            <div class="mb-3">
                <label for="arrived_at" class="form-label">Kelgan vaqt</label>
                <input type="datetime-local" class="form-control" id="arrived_at" name="arrived_at">
            </div>
            <div class="mb-3">
                <label for="leaved_at" class="form-label">Ketgan vaqt</label>
                <input type="datetime-local" class="form-control" id="leaved_at" name="leaved_at">
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
            <button form="export" type="submit" class="btn btn-success">Export</button>
        </form>
        
        <table class="table table-"><br>
            
        <div class="col-auto">
            <form action="download.php" id="export" method="post">
                <input type="text" name="export" value="true" hidden="">
            </form>
            <thead>
                <tr>
                    <th class='text-danger'>#</th>
                    <th class='text-danger'>Ism</th>
                    <th class='text-danger'>Keldi</th>
                    <th class='text-danger'>Ketdi</th>
                    <th class='text-danger'>Qarzdorlik</th>
                    <th class='text-danger' scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                
                global $records;
                $i = isset($_GET['page']) ? (int)$_GET['page'] : 0;
                foreach ($records as $record) {
                    echo "<tr>
                    <th class='text-danger'>{$record['id']}</th>
                    <td class='text-primary'>{$record['name']}</td>
                    <td class='text-primary'>{$record['arrived_at']}</td>
                    <td class='text-primary'>{$record['leaved_at']}</td>
                    <td class='text-primary'>" . gmdate('H:i',$record['required_of']) . "</td>
                    <td class='text-primary'><a href='index.php?done=" . $record['id'] . "'>Done</a></td>
                </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>