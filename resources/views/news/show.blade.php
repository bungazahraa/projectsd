<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SDN 1 Banjaranyar</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

            body {
                font-family: "Poppins", sans-serif;
            }
            .container {
              display: flex;
              flex-direction: column;
              align-items: center;
              background-color: #f4f4f9;
              padding: 20px;
            }
           
            
            h1 {
              font-size: 2em;
              font-weight: bold;
              margin-bottom: 5px;
                line-height: 1.6;
                text-align: justify;
                color: black;

            }
            .col {
                display: flex;
                flex-direction: column;
                align-items: center;
                background-color: #ffffff;
                border-radius: 8px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                max-width: 600px;
                padding: 15px;
            }

            img {
                width: 100%;
                border-radius: 8px;
                margin-bottom: 10px;
            }
            p {
                font-weight: bold;
                font-size: 1em;
                color: #666;
                text-align: center;
                margin-bottom: 15px;
                font-size: 1.1rem;
                line-height: 1.6;
                text-align: justify;
                margin-bottom: 1.5rem;

            }
            /* From Uiverse.io by e-coders */ 
                .btn {
                appearance: none;
                background-color: transparent;
                border: 0.125em solid #1A1A1A;
                border-radius: 0.9375em;
                box-sizing: border-box;
                color: #3B3B3B;
                cursor: pointer;
                display: inline-block;
                font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
                font-size: 16px;
                font-weight: 600;
                line-height: normal;
                margin: 0;
                min-height: 3.75em;
                min-width: 0;
                outline: none;
                padding: 1em 2.3em;
                text-align: center;
                text-decoration: none;
                transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
                user-select: none;
                -webkit-user-select: none;
                touch-action: manipulation;
                will-change: transform;
                }

                .btn:disabled {
                pointer-events: none;
                }

                .btn:hover {
                color: #fff;
                background-color: #1A1A1A;
                box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
                transform: translateY(-2px);
                }

                .btn:active {
                box-shadow: none;
                transform: translateY(0);
                }

                h2 {
                  color: white;
                  text-shadow: 1px 1px 2px black, 0 0 25px brown, 0 0 5px brown;
                }
    </style>
  </head>
  <body>
  <div class="container shadow" data-aos="flip-down">
    <div class="row">
    <h2>Berita SDN 1 Banjaranyar</h2>
        <div class="col ">
            <img src="{{ asset('storage/' . $news->image_url) }}" width="100%" class="mb-3 w-full h-auto rounded-lg shadow-md mb-6" alt="News Image">
        </div>
        <div class="col">
        <h1>{{ $news->title }}</h1>
        </div>
    </div>
    <br><br>
    <p>{{ $news->content }}</p>
    <small style="color: gray;">{{ $news->created_at->format('j F Y')}}- dibuat oleh {{ $news->nama }}</small> <br>
    <a href="{{ url('/beranda') }}" class="btn">Back to Home</a>

</div>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
  AOS.init();
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>