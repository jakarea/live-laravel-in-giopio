<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
">
</head>
<body>
    <h1>Test Blade</h1>

    <?php
        $i = 10;
        if($i>30){
            echo "<p>10 is greater than 10 </p></br>";
        }
        else {
            echo "10 is less than 10</br>";
        }
    ?>

@php
    $j = 100;
@endphp
    @if($i>3)
        <p>{{  '10 is greater than'. $i }} </p>
    @else
        <p>10 is less than 10</p>
    @endif

    @for($i=1; $i<=10; $i++)
        <p>Looping {{ $i * $j }}</p>
    @endfor

    <?php
        echo "Hello php";
    ?>

{{ "Hello blade" . 123456 }}


    <form>
  <fieldset>
    <legend>Disabled fieldset example</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Disabled input</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Disabled input">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label">Disabled select menu</label>
      <select id="disabledSelect" class="form-select">
        <option>Disabled select</option>
      </select>
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
        <label class="form-check-label" for="disabledFieldsetCheck">
          Can't check this
        </label>
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</body>
</html>
