<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Currency Covert Example - Webappfix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">    
  </head>
  <body>
      <div class="container">
        <div class="row">
          <div class="col-md-12 mt-5 pt-5">
            <form action="{{ route('currency') }}" class="border rounded mt-5 pt-5" method="get">
              <div class="row">             
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-5 mb-3">
                      <select class="form-select" name="currency_from" required>
                        <option value="">Select Currency</option>
                        <option value="AUD" {{ Request::get('currency_from') == 'AUD'?'selected':'' }}>Australia Dollar</option>
                        <option value="EUR" {{ Request::get('currency_from') == 'EUR'?'selected':'' }}>Euro</option>
                        <option value="GBP" {{ Request::get('currency_from') == 'GBP'?'selected':'' }}>Great Britin Pound</option>
                        <option value="INR" {{ Request::get('currency_from') == 'INR'?'selected':'' }}>India Rupee</option>
                        <option value="JPY" {{ Request::get('currency_from') == 'JPY'?'selected':'' }}>Japan Yen</option>
                        <option value="USD" {{ Request::get('currency_from') == 'USD'?'selected':'' }}>USD Dollar</option>
                        <option value="USD" {{ Request::get('currency_from') == 'BYN'?'selected':'' }}>BYN</option>
                      </select>
                    </div>
                    <h4 class="col-md-2 text-center m-0 p-0">To</h4>
                    <div class="col-md-5 mb-3">
                      <select class="form-select" name="currency_to" required>
                        <option value="">Select Currency</option>
                        <option value="AUD" {{ Request::get('currency_to') == 'AUD'?'selected':'' }}>Australia Dollar</option>
                        <option value="EUR" {{ Request::get('currency_to') == 'EUR'?'selected':'' }}>Euro</option>
                        <option value="GBP" {{ Request::get('currency_to') == 'GBP'?'selected':'' }}>Great Britin Pound</option>
                        <option value="INR" {{ Request::get('currency_to') == 'INR'?'selected':'' }}>India Rupee</option>
                        <option value="JPY" {{ Request::get('currency_to') == 'JPY'?'selected':'' }}>Japan Yen</option>
                        <option value="USD" {{ Request::get('currency_to') == 'USD'?'selected':'' }}>USD Dollar</option>
                        <option value="USD" {{ Request::get('currency_to') == 'BYN'?'selected':'' }}>BYN</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <label>Amount</label>
                      <input type="number" name="amount" class="form-control" value="{{Request::get('amount')}}" required>
                    </div>
                     <div class="col-md-6 mb-3">
                      <label>Date</label>
                      <input type="date" name="date" class="form-control" value="{{Request::get('date')}}" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-3">
                    <label>Converted Amount</label>
                    <input type="number" name="amount" value="{{$converted}}" disabled>
                  </div>
                </div>
                <div class="col-md-12 d-flex justify-content-center mb-4">
                  <button type="submit" class="col-3 btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>