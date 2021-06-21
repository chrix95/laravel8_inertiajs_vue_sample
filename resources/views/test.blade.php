<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .red-box {
            width: 640px;
            height: 732px;
            background: red;
            position: relative;
        }
        .blue-box {
            width: 200px;
            height: 200px;
            background: blue;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="red-box">
        <div class="blue-box"></div>
    </div>
</body>
<script>
    let result = [
        {
            page: 1,
            totalPages: 5,
            data: [
                {
                    title: "Movie 1",
                    rating: 4.7
                },
                {
                    title: "Movie 2",
                    rating: 7.8
                }
            ]
        },
        {
            page: 2,
            totalPages: 5,
            data: [
                {
                    title: "Movie 3",
                    rating: 5.1
                },
                {
                    title: "Movie 4",
                    rating: 2.4
                }
            ]
        }
    ];
    function calcAvgandMaxRating(items) {
        let totalRating = 0;
        let count = 0;
        let maxRating = 0;
        items.forEach(element => {
            let rating = 0;
            element.data.forEach(item => {
                count++
                rating += item.rating
                if (item.rating > maxRating) {
                    maxRating = item.rating;
                }
            });
            totalRating += rating;
        });
        let average = totalRating / count;
        return `Average: ${average}, Maximum: ${maxRating}`
    }

    console.log(calcAvgandMaxRating(result))
    
</script>
</html>