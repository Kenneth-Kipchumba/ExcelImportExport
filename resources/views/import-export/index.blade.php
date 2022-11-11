<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
</head>
<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>{{ config('app.name') }}</h1>
  <p>Import & Export Spreadsheet Files from/to your database engine</p> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
</nav>

<header>
  @if(session('success'))
  <div class="alert alert-success">
    <p>{{ session('success') }}</p>
  </div>
  @endif

  @if(session('error'))
  <div class="alert alert-danger">
    <p>{{ session('error') }}</p>
  </div>
  @endif
</header>

<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <form action="{{ route('import.store') }}" method="POST" class="was-validated" enctype="multipart/form-data">
        @csrf
        <div class="mb-3 mt-3">
          <label for="spreadsheet" class="form-label">Select File To Import</label>
          <input type="file" class="form-control" id="spreadsheet"  name="spreadsheet" required>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Select file to import.</div>
        </div>
        <div class="form-check mb-3">
          <input class="form-check-input" type="checkbox" id="myCheck"  name="remember" required>
          <label class="form-check-label" for="myCheck">
            Everything is okay ?
          </label>
          <div class="valid-feedback">Valid.</div>
          <div class="invalid-feedback">Check this checkbox to continue.</div>
        </div>
        <button type="submit" class="btn btn-primary">Import</button>
      </form>
    </div>
    <div class="col-sm-8 text-center">
      <button class="btn btn-primary">Export</button>
    </div>
  </div>
</div>

<div class="mt-5 p-4 bg-dark text-white text-center">
  <p>{{ date('Y') }}</p>
</div>

</body>
</html>
