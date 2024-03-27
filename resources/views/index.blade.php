<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <script>
        async function getData()
        {
            const response = await fetch('http://localhost/garageguru/public/api/jobs');
            const jobs = await response.json();
            console.log(jobs[0].car.name);
        }

        getData();
    </script>
</body>
</html>
