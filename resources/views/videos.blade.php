<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>rame</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
 
        @foreach ($infos as $info)  
    <div style="margin-top:20px;" class="card">
        <div class="card-header">
          <h4> Name: {{ $info["name"] }}</h1>
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $info["title"] }}</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="{{$info['link'] }}" target='_blank' class="btn btn-primary">Watch the video</a>
        </div>
      </div>
      @endforeach
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>