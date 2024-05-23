<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 600px;
  margin: auto;
  font-family: arial;
  padding:10px
}

.column {
  float: left;
  width: 40%;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

@media screen and (max-width: 900px) {
  .column  {
    width: 50%;
  }
}

@media screen and (max-width: 600px) {
  .column  {
    width: 100%;
  }
}

.font-bold{
    font-weight: bold
}

</style>
</head>
<body>

<div class="card">
    <div class="row">
        <div class="row">
            <div class="column">
                <p class="font-bold">Type</p>
            </div>
            <div class="column">
                <p>{{ $talentAcquisition['type'] }}</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p class="font-bold">Name</p>
            </div>
            <div class="column">
                <p>{{ $talentAcquisition['name'] }}</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p class="font-bold">Email</p>
            </div>
            <div class="column">
                <p>{{ $talentAcquisition['email'] }}</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p class="font-bold">Phone</p>
            </div>
            <div class="column">
                <p>{{ $talentAcquisition['phone'] }}</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p class="font-bold">Budget</p>
            </div>
            <div class="column">
                <p>{{ $talentAcquisition['budget'] }}</p>
            </div>
        </div>

        <div class="row">
            <div class="column">
                <p class="font-bold">Message</p>
            </div>
            <div class="column">
                <p>{{ $talentAcquisition['message'] }}</p>
            </div>
        </div>
    </div>
    <p>Thanks,</p>
    <p>{{ config('app.name') }}</p>
</div>

</body>
</html>
