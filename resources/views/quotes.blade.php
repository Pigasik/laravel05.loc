<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>This Day</title>
</head>
<style type="text/css">.lead-quote {
    font-family: Poly;
  }
  h2.lead-dialogue-author,
  h2.lead-quote-author,
  h1.lead-quote-body,
  h1.lead-dialogue-body,
  h2.lead-dialogue-body {
    color: #555555 !important;
  }
  .quotation-mark {
    display: inline;
  }
  h2.lead-dialogue-author {
    display: inline;
  }
  h2.lead-quote-author {
    display: block;
  }
  </style>
<body>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <div class="content">
        <h1>
            <span style="font-size: 0.8em; font-weight: normal; color: #bbb;">Quote by {{ $quote['author'] }}</span>            
        </h1>
        <div class="jumbotron" style="background-color: #F5F5F5;">
            <link href="https://fonts.googleapis.com/css?family=Poly" rel="stylesheet" type="text/css">
        
        
        <div id="quote-box">
            <div class="lead-quote">
                <h1 class="lead-quote-body">
                    <span class="quotation-mark">“</span>{{ $quote['body'] }}<span class="quotation-mark">”</span>
                </h1>
                <h2 class="lead-quote-author">— {{ $quote['author'] }}</h2>
                
            </div>
</body>
</html>