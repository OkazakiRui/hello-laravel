<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>evenOddJudgment</title>
</head>
<body>
  <h1>偶数奇数を判断する！</h1>
  @if($num % 2 == 0)
    <p>偶数！</p>
  @else
    <p>奇数！</p>
  @endif
</body>
</html>