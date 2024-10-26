<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <title>Malcolm Lismore Photography</title>
</head>
<body class="homebody">
  <!--add nev bar-->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
      <div class="container-fluid">
          <div class="logo">
            <img src="images/navlogo.png" alt="" class="navlogo">
            <a class="navbar-brand" href="#">Malcolm Lismore Photography</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="links">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Accounts
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="admin-login.php">Admin Login</a></li>
                        <li><a class="dropdown-item" href="cus-login.php">Customer Login</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="sign_up.php">Sign up</a></li>
                      </ul>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="gallery.php">Gallery</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="aboutus.html">About Us</a>
                    </li>
                  </ul>
              </div>
          </div>
      </div>
  </nav>
    <!--add  carousel-->
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner" style="height: 70vh;">
          <div class="carousel-item active">
            <img src="images/car1.jpg" class="d-block w-100 car-images" alt="err">
            <div class="carousel-caption d-none d-md-block">
              <h3>Welcome to Malcom's Photography Site</h3>
                <p>"In the world of photography, you get to share a captured moment with other people."</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/car2.jpg" class="d-block w-100 car-images" alt="err">
            <div class="carousel-caption d-none d-md-block">
              <p>"If you can see it, you can shoot it." </p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/car3.jpg" class="d-block w-100 car-images" alt="err">
            <div class="carousel-caption d-none d-md-block">
              <p>"The camera is an instrument that teaches people how to see without a camera."</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--Service Cards-->
    <div class="flex card-container">
        <div class="card" style="width: 18rem;">
        <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxQUExYUFBMWFxYYGSIbGRgZGR4fHhseHh8b
          ISEcIiEhIyoiIiIpIR4fIzMjJystMDAwHCI2OzYvOiovMC0BCwsLDw4PHBERHDgnISgvLy8xMS8vMS8vLzQvOC8vLy8vLzEvLy8vLy8vL
          y8vLy8vLy8vLzgvLy8vLy8vLy8vL//AABEIALcBEwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAFBgQHAAIDAQj/xAA/EAACAQIEBAQD
          BgUDAwQDAAABAhEDIQAEEjEFIkFRBhNhcTKBkQcjQqGx0RRSYsHwM3LhgpLxJENTohWywv/EABkBAAMBAQEAAAAAAAAAAAAAAAABAgMEBf/EACcRA
          AICAgICAgEEAwAAAAAAAAABAhESIQMxIkETUWEEUrHBMnGB/9oADAMBAAIRAxEAPwC0RjYY1GNxhiNhjcY0GNgcIDbG2NRj3ABtj0nGoOPTgGeTjZcc5
          xsGwAdZxtjlOPQ2ADphY8W5jIVB5GYqUxUM6YvUpmPiGmSvzsZjrhlBws+IvBVHM1fO8yrSqEAM1MrzAAgWZWEidxGE7rQ0JXgfxSuTqfw+YYChUMq+wR
          us9lbr2PucNn2oVlXJBmYadYM9NmwpeK/AjUULmoa1LZiVhknqYMEeoiMItTjteppylc+dTojRTDDp0YjYsAQJMkAYi3VMuk3ZLyFVaqhqewJEH5fvONOIU
          UeqiRdbkkSLgD6wZ+WOPCatNKvl0iCvN1i9p94mPljTiIrI5qNpnRACnYEdfWBjGTN4x2As58bmDzEi23Qx62j64dvA2T1hVA/9zTfuY6+xGEkUi+j5sLbTc
          /X9sPXhV6RpVKavoYM+pgCSrQYI+gxd9JkyWmWR9pnFf4XJPoMVq48pY6SOZz/tWb+2Ez7M8nTXNLW1KtKjTKKZA1EkKGvvJJPyGFPxZ4xqZuq+qBCaQekxB0g
          7Akm/rhqSq+Xy9GhTYo6qtR0lIqAlYEt/Ra0EE/PFPbtmVYxr7I3i7ilRs7Wen8GmnRqG5anOp9diAANV9RMRMRidl+L5mhUSiMwtSgaasaoa0OYkXAEgTtpk4S
          eNZI+czUXc0qoFQqrMYZyw0i51khTzEbGPfzhviXRTNFwmi7amWW1KAEHUwBJH06DDbFRd3AfEJSnoqhyEECoQZY73EbXgETMHtgzVLBzFE6H+JpGo7jbfr3+mKq8P
          ccrU6ZL6tIBV1JdmGmHeojKbakaYnZJHbDuPFiCgTScuxJAYhmVYHXafy3GCMrWwap0MZp+WqrEhQFAMAfy77zDdd8b8OoU6aJTojTTQQqwYC3AF/b6fLCq3FK1RFdcx
          EprIAUKSAQAZkqDI2MjDBluIaaIauVHXlJO1+t59L/PFJ7J9Wb8XzJVGHmaDBv8Ap3MdJxXnEfEVamoqNnvMVKxFRRT0hdA1aR+Nul77zGCnjPi9PMZbVSzHlhuQuqsSIa
          43HKYI1RtBxWfGab0qdF1ZKgUI2rQCeWJl4vc9z7mMTKW6Go+x1yH2h0lNRk0wzoCXblGoAaxPMTq3tYLOIR8a03rGnWWm8tNFwmykLLkLOokzpHWB8kSpxRalQ1TOp6mt1Kr
          oUKQRAC3JvcARPW+Olfia5ior1URSmkKabQAiyQsGQTMXjv6YdhiWi3F6OQNMA16tV1lUpiWcEkF2T4YsBP6YNZrxiVpLUbJZgMP9RStqY7kzeRER9cInA/H2VCUjXpsKiIQCqC
          ATqmDGoAzMSLxh24HmhXrGulan5VQFAkHUwB6rqiY9JvikzNqisONV6xr1DTr1ghaVCeYqgG8QHiRsSNzJ64zDlxLg+VFRwyVyQYlPhgWERaIjbGYVBQ+NXCyWIUdCT/n0xqM4gmLk
          7wMB8xllqKQzkmfiRoZf2HviPwzgdVX1PVlQbLBFtheR9CDsIOJcpXSWjRRjjbeybmHLZqhWCtpSnVQiN9ZokHfpo/PBhM6nePfA2rQQVKYvJ1Rc2t/xju+SX19LnGhAUVpuPyxvOA+X
          pspJEjsZ3+XvglSqz74AOwON5xzBxk4Bnpx7jwHGA4APZxsMaHHmrAB1GNpxx1Y91YAPagVgVYAgiCDsQdwcfPX2gcK/g86zKspsL9HBMH1A79hi/wCtUtMG24G+Pnz7SMwHzdVQjIzVQWR
          twTTpCTFrXH+DESLgC8mVY09I5gDfa5NvflEn2xtmHDUqrhgXXQVEG4LQZn0iOkYIcNyP4QeanGqetth2uRiLU8yg7xTkVFIHb4ZMx1AB69Mc73tHTH6MyGWKrzX1IDboJBiDERMEemIXDnan
          RztS4mEX3Z4P0GC2fBNWl+FTugF52vN7gxHrgdVRhSr2BD1goBuF0hy/oIJHz9sVxv7FydKjp4KyCOzVKtJ3p0wCwQ3i+3r1t0GHDjS1hl/MolalOk4IGsPqSndWZZmTYxtj3wBQRcpWNKsVqgeYwAuANSoYMWFzM9d8DOD+IHQV6L0RUZ6JFTXWEmE+JREbAGBfGpzmeK+DslOhXaoPPLaHKOWWCTBEQFhmPLb4sQqiUqI8iooL6WUFabqVqE9STDhSQZtAI7YN5Dib5pvJrVKSH+GOlBLo7kMJKSFV7SVJBHKRha4lVqUKvl1KZqKsKxfUZLKOoY32IuduowpfgaJJ4Nma1ekuqqCRp1ERyJCOQ2zGNh1kb74ZPBviOlRpGkdKtLNB1AAgXvMk2JIP5SBhMfiJqFiC6FmhfLDKac/1XJJ2ib/lguqiaRpEodOlGQjU5JCtpBAJJkg79e0YzWS0U6ZYVfOQjroAcqWDKYDbEyR8HxC5772xy4Vweo/k1dKq1JmYkMCWQ2Etbmu0xa+EniT1Mu38PIqKjKgQtJGoAkwy3BBEjVAJscMnBs3Qo01TLVAoVNbVGVtIJ3WT8Bk6biN+ojGlslpHLO1y1Y0RU00SZNNgqpVbmlA06ontawsbzKznAWQB6bAs1Q1DScAKIBDGANz9JwnZvPnMVKdViGp09Pm1GQN5ckk2tI5Ty9BfYgmN4i4+tTL0kpeahDNA5gGBGnUG6q0HltEkYEEl7DPiStTGVIR6FWm5V5stYExLgAANMtvYX3AwhZfLO7OEQFlRmIJgaQBPz9OuG7JoBR/iUhjTolUBUBnMHVqETpAJhp2G2A3iLxD5zpVCoGC8+kaNbEyRymCBNjvc4aEDOG8NavUKU2CgAESYm4EAt1vN8Mvg/idChXqP55oU4vSlmYjrDwRqkTtcWwjvU1b/AExLypqIpqr8KnTNvxAj32O/riyRvzHHXqNrWu0ED4hBkAAzfuDjMJEx+L8zjzAFH0OOK06MzdgQDA3Jkx+RNr43peJ0Z+ZGTYE6pHzFo/XFPVfF+ZsGoqCGLQVcGT6E9CPrOJdTxFmqbD7ikx0hiVDsLgNpJBiRMEThbTGlaLtfM0y1Nta2JvqHVWxLSup/EvyYHFDL4zraj9xSBPQB49vitfE7I+NagYf+lS9jzPcfmOgPyxRNF2gibEH546acU1V8VZlgSmWUKBLEhyAPeRjfK8d4g4Z6dNdIAJZRa5ibtGFaHRbtTiIVwmhzI3Akfv8AlidpxVXCOM8QWsgrsFVvh1FV3IPfrtJkCTiwuFZw6ZqFAIJsSeu83mcFioJacZBwt5nj1VGJJp6AYlew9xcx2OAvG/Hl9NKNBsxi6z7j9JHrhOSQJWPheJPbA/iHGqNKkarONN4jqR09+mE/w1x1Zq1GdfhgsxgkKN9IAvb4evfCfxrxIlStpUl6WsMEHKGi0t77wdsS5joYMv48zNarpp+WGIIVZhQTsdR3O2PU8bZukQagEaiCrRNt+n77YVuGucrUXMIFK8wGpjeCpKi0HSbzGx3xO8W8bp1wK1Fm3GunynSWkkgwbyP+cTv7GWvV4sr5bz6Z0lhaRJ9is3PoMU9xXg9XMZgVvLqy9QtVZwAFACgEKJcqE0HY9fkY8P5wUqWipWVoYnR5iqGttuLCxIm/1GMPEstXpgmoyUabGmSp8oVG0S151AQu0TJiYwSk2OOhf4WD5nmCrRZatRgUU88JYObCAYEekHEjjeSJ0S2lS1x3vb9jjH4fR1LSoZWpNclHrLzhFLBiV1cpOkjnGkC4vEYj1soawr1y5atQq8iU2RVVETnJpgmNrkHfEONmkeSns18QpTptTcyoQTO5gERE9e2O/hbhVPMZqp51XWqc60ywHmFyT15bxJ9o64044ozNTLU1KEEF2JOkGZFvUaWGneSBgXwziL0krq1MRWWwJ0lDTbRMWM3iN7G0CxBK7Km3jQxcQ05GrXEeX5kDUFJIRweUKBBgrcki3QmJSqFRwdYTWrkrqKg3MEwCLGI22wTzOXr56oq0gQoVS4vpW5QQO1jEYNZDwfniRTN0V5LtVI1KbARzaSLnVcgkdgcW5JER429kTKcCeadL+HDnTqB85RDMspMAGARsZM98E63DKdap95y1FXS66iRrjXEAqzEStrAyb2xIOT/gqtWk4qL5gH3xBamlMgmAQAFKsCL2GsHA+rTo5x6eYakdbO3mFFOltRdVIIb4l0i950WFwC7VWS4NMH8KbKKBRNJnqgN5jONIBJMRBJ1LFhGxIkmJ7J4hywQ00NVCHD+dJJaT94DswBvaTckyN8LeXpUzOpmkkgmYkG9wegYKd727YYa3CqdShVqU9C0aelRUCkhnWJctPKpm4VSNus4TaT2NJtaBlPxDXXzFZ+RpGn4ktEC5aQQLjV13tiZ4d01z5Rq1VRrtTpmFCqJOrV8Mvoj4vxdYwu1q2oM0BVBMFKY0MzWjoF5ZYW6bDod4Jn6WXp0a7IV1MyHTBVlWCS0knWCRAsBb1w30KPZB4nSNFmVKjokiRqk3kaiF7wekwQOuIVLPmUJqsppkQIBVQomRJgsT+HTBmScMlXi+SamJoFwD8RgOdII2m4+EhSe/bCjmSzqxUcitJgWUvAHp+GLdsNL7Bk4cVJTy0VhcaPvGty6W3Mc1p9zBjYXWXngGO0jrG2N01EhyhbUSZYEAkTYHYjYn1t786yrAIJJ/EbbkbAdet/060lRBxYe+NtZ0ka7SBpvf+0DGtSnEbbA26e+OZxYG6x1n6/8AGMxyxmChF61fB1OpUNUVCalr1L9IjUDPc7dcQ87WbKVKdF1J5SFkyItpgzcbj0iMNdGpOInGOGUMyq+erNpnSylgR813HpfHLLiUtnVHlcdeimMzn6dR6joCi6QdO4W6yBYWB2tjrwziGhtSsCDYixsd7HDN4j8BJQp1K1A1NBTSyOJIllgggTFtiJwm8T8PPRYLUlSQDeJE98bJx6MWpPY2vnahFQAgAiSdW4PW/T2x5SOY8nSp5SwiSIkT3/LCxlKbqINaQPw72+uCdLMu5pZeZAcHQREgHUR7QDjKSroa3oLZ/ilaqVEx5SBbmSPnG29sSaPirMhFpAwwtNutog2HyxJ8WV1fLirTp06bKyhijE6lbaRpAsSNiYuMJhzJnlFjghJyVoc4YvFjRlOMVgNGnlmYud7QOw9BgVxTWCSZWTpi9uuOWS4g5KqgJOyiNyfTrfDJn+E1TQerVpVPNLQqmmdKqvxOQNpE79I2vhZU9ijG+hNeudBmNx039umB4YaiCIt3wTzeZUUlVIE/Fyi5Ej5f3wKFIlwu5YgfU+mNEQwjlcvUqKNyigganAFyNp3+WDB8OVEQaHptUmwSqrSDFuh1dIwHNYisq6SFWFUHt7eu/wAzhq4lmUmpTM8jaZI62E7d9sRKbRrHjT9i5SrVGimAWCMeQzabG3Q9I9MCmcpUqFXCopkpqYa5sVGkTJBI3FpE4PeJ9dMpVBKs5MlT+NYvIMgwQZ7364H5bhIq03qyovcnURHcH3tecVGSq30Q4u6GHwrxinUZjWqK1VgBqeo1PTTUREoLEwCYJmACbXPZCuz0ssaLKLBWWkA1RXCECoCUgwjE6G3A72xWdXhgKgg8wGwEyRF/oceUeINTqjU9TQGXVIBeFmwk7QSIkCDh0n0JquyxuJ5DzqtLMo5qQDWLswUOllCwAPLaBcAGfcHCb4gzJWabKJceYTeVLPUYCd50tBk+u8Q3cC4zmCvlNQp1taB1JVo0WUIFspPxWW12ueqh46UrnKwIIHKVtHLpEEDtH6YmK8isvGiwvCWVSjRasQR5gRjpVVEFFaAAAIljf6kmTg4vG6SAsXYLq0zAMkAGFPU+g9e2FDwf4hrNldCUpKAU6cg6H0oNybTuSBsBg7W41V8jSMkWYEG4QqTbVsZE3iYiL9jzyvJo7eOnFGn2i6alAOXdUKXsTNyFEAqwuTNyPTAmgKSZbLUajimuiaeYJUDmUlgQDdt10yQNVztOnijj1PMZhMrVp+ZT0gFUs3mttpOpRZbjcSxsbRFy/hwVsw/m1NdClUKpoIJfQROqZJUAhCepFu52g/HZz8iuXiHeEcC4eoCJQ8zWNJaqWJcTOqBC6ZEwBEgdcGc94NydakaCI1FWOomi9tQAgspkHYWIt0jC9xLJU8mPPoVKiwVR1apKBCVQONcg6YC79fSMGuG8QqCvprVKRTy9cISWB1ALJnSFZTIAEwLxOLU0zN8cv+iT404SMtUL5ioC6qBQmmGWqqKFClSdIub2tE9sDPDvhepnRqZ1o0dXLyTqIAUlQCP5QJmN42w8fawqNlqRaNLVlXzJBNMNOo7ExpXp6b4D8O8TUyoTLsmpQFpoFOoDaAp+IheadrHFKkrREsrpnfif2aU6mnyawRogg0oRiJvZiV6D5dzhJ4h4dq0mqZdqJWoo1l5Zg6gtYBVIgyIJj4CTF8WZw/iWZfSGJBETNNJaAZgEzE+n03wB4x4iqZhqVGmy/wARSqkOQG8srsAyNKtLEQJMEE4WcX0PCS7K2pJUKsykmnS6zAXUYEAnckdL29MR61RiSWJJO5Jkk+px9BZHiNPUKGYp01dgBBClWnp2m3sel7YRvtF8MZKjUiiGFaoJFFPhQTd/SYIA23MWxaknslxldUJ3BeAtmNITUWMmACTAMW6d9yOmDmd8ENT1O1KqEiVVipMgfiZTcTeyz09cFPDlKtl6TmlRNRtegjWBpCgEyY6sx6YZTlq9ao9Csiigyf6gq8w1CQQO4OOeXNLLXR0x4ljso6pYkdse4ZOJ+GKnmNpYQYNwRcgE2v1nGY2+WP2YfGy3hmQQIImJEz/kfXHXJZuWheUn4lImD3HcHfAGsSE1j8LQw9Dsb2+eIedr1LMhMi8A39SDuPnjNyLSLERA6lWAIIgyNwdxGEur4dpUs2rVyKqeSUCOgI+Ic3yHWOuCXA+OBlBDax/NN/n1n0wxVaNGuUdk5gIVj0DRIsdjAwNXtdiTrXoQvFPgSjq87LMKawoZApKg3lgSbfhEbb4r7juaqUMxpFT7xAPvE5SJG3/ab95OPoBOHxQInUxU+zGDaNxirMxwHLGo71KZcsFMAsY6GANzaepv74lTcJXMbgpagRuA1v4nLlYHK6pXpqzatFWEGYTUdCgMRKgQN5AMYJ5PwVSSpmBV1OqwtIliNNpJlOUnVy3HpF8JfGVGUzDCjKo1MgoZPLUBVkM3gi8G4MdRixPs2StmRorIyUqKgBv/AJDMADuAAZPf6Yua0nD2ODWTU30L3AfD1WjVSq7KQvMQDBDQYNxFj6jB6h4tNFq9HOCqabktSKQYU/1La+9z+uLBz3BMsyMBS/CRKkg3Hobe+Eyn4Oo5gGpTr5ijVC6ZHMlwIkTuAYNwbnffE1K9k/4iNxDwwzNqy6laRAK+YYZZAkEAdDIx7wnwtmBXpu+nSDqYhu1+2H/i+WGXA1VEZmMKoJEyQJJI5R1M7AHBKjwKqPiCkFfighTPQ6wPz3xGc+qBKNiZwvwylXmdEViTB0/CoYwRO7NEyeh6dTq8GeklTyirl2LEMOYk9m6ekgjGnGsvWpkOKvlRKtqBIsbmJjqRMY04jTrGrTAzOlGAOgKZMEao0sN9uYEXEXxz5O9s7oxTVpALxfwt6uTqPoWaLq4YWOlrG2owRIn2HpgCAKdFEtYkVACIkqD89/li5qvCkelUW0VaWkmdvQfmcU9w6gFZVqKQA9wY36z+p9jjo6gjm7mzThuSqqFTR/qguB1A6T6H9sb+IPDw8urULA1Q1uk2BgDf5YYMpxqi
          GpF1DDVBJJkdbwbAkj05cR/GLUXDsTTgHluSS1jssQALTODbaaG+qAvgvPU6NNi1fdhTakacwpJNjqBJtIj4ZJx5444UyZnW6HyNK/6ckAfiQO4A1Akiek7WjAXM5haIanTCnzOYVAzT5bbIRMTtMzBtjnX4w1bV/EF6rR92delUbqxUCGMe3SZFsdKi27OW/Q+fZ5l6tfK1lFUlqLp5SmCqcrWHeQYPQx03wwcOrVKrVKRomlV0gEgkgyeYgEgLb8RHbfFTZLO5ilSdqNVkUsqPp3JYNp2v+FoIuOm5w3nwvxXMZbVVzDKrgnymJBa9tYFu5gzHviZcKk7NYc8oqiV4wRKebL5JqbVBlhTYq6haTzpLliQEIprpEkdMb+Fahps1LzhrFJSXnVLM5epcG4JIvuRBv1F8H8M5tGrZBhS1aVrHaB+EDXplTy7bYG56pX4fWFNXYVCNVQPTUg3aArMCWSOoMEjuLE4OSxQQmovJjtxHjdUGpEM1Ck5YhQNZI1W3iIUy0zfeDha8P8UFbNVDVYnzaZZWYeZoA+JTOwALQeogHpJnwTxxcxmKj6dNUUyWAkqYtqVTcXYAi/T1hj8K+G6dOrm2KCKlTSnUCmVVyotEamPpyjsMHHx+DUhT5fNSiR+O+GqmeyYNIAlIakplRVaCCu6kC5i8SBuMVr4KoNQ4gEqzTqIGBV0JaY+EKLyQTB263x9CU2CwNVh3Nv2GA3iXw4uaqUswhRaiSCSLsBIAmDYEm2G44wxQlLKeTFji2YV8vL1SHDQWA8sztYGYMgX2wuNklSs1emNZq6WVY+EqQrTM7yTt2w35bgGgmpmV1uDCUwFIUbAwo0mR1Nh77Tv/AM6yUC7quXsCqkreZgWm8D8xvjjSluzslTaaK/4pxSms5mogBpakWg0feOYCMYADKBqYiOoHuKTiWYr0xmKks2jRMRyqXP8AePkO2LKTiNLMCKpy+YSfgdQSp7XBE+uCVDK5NkCijTVQIC6QAPQAe+NU1jijNxeWTEfhepVAZgC4LwRzAm5k+52xMyvGaDPpvqQbnceoJ/z64mcTy9IVG0oJQwsMZghSBEkHc9JuO+AnE+F0i71qZCyhDKQSLhiG6HpvAFiRFsC/Tz7W7J+WN09DPk8jCL1tuWJn64zETLtRjnC6gSDKxsSOon64zHVg/wBpy2v3E88OIOsAMjCGXeVxHPh0LMEsp2VwTA9CNvY4NcOIKxaO2+CNKl0AGM8EaOTKyrcOahUL0uWfiXoff19cMPDfESAmnrGoAEqTcTfrg3xHhgbp+WFjjfhpSxqIh80KDIBBgbiZg2G0YifhsqPloZMx4kDEU8uATuWJhVA/Xtbvhf4SiO9WYKgkGBblF4HQam/LA+lRFPLuTBY7ltkI2BBveD07e+NvCfCHrVNTPKJGsAbzMBSLkED9cZNOdWOElG6JWY8I5alUfMZwq9Oqqiigs6abyOa5PYd8DPCniKqjUstRdQDUctqUM7Lq5UEAgHSpJPQuPbFtZWms8yoVUWBAke3+dMA+H8KytDOPWSlod1aSJhpYMxg9dpI9Mb4kZbsIvlXCcxUgglhMe+0zueuAWQ8ZZalW/hkQLTFtQ3BkAs02iT1O0HrGC/EdRK0wXC/H5iNFg3wzHW354qTjPEVp8RrEqAobndl1cy09UwTp3IlYuQNiZCd+gnNy7LtqcOo1aiV9ILoDBgbGCfna3aT3xtxfiSZemajglR8WnovVo6gbx2nCN4V45WbLnMPUpyXAVZ0DQJIJBYgbzYn57Y18XeIRWY0KdYK1JvvAoUnZXEAmNJspPvbDy0xYtJNk7xEtCpVC06qlymoKGBMG8x0ERviDwzgxRhIUA76RB9PYe2Ofgjga00eqAKmYZmlySRFmIiBB5kmx+L0jDEa1QMQaVtUC99I1c3rsLD+YY5Z8Sys6uPmeNBPhqwIxC4xwqhXBFWkCTI1gDUJtZt8FOGgFQ4kztbtv67/piDxHNaayoNmk+wEf3xs1jBGaeU2UdnuDPSq1QaiuyMV0sDcjZjFoIgxa0YivkqjK5cUzNzzNY3PyEYcfHeXjNtazIrW67r//ADhT47X0UGJBloUT1nf8pxnGcnJRIlKnQo5ipqYkbdPb2xvQ3GMoZGpUMU6bueyKW/QY8emyMVYFWBurAgg+oNxj0DAuL7Iq7VjWFVQVVKQpHQAIpF1OkxciRJ7npOLQamoX57fM4pH7HuMsuaNHUfLemzaezyl/SQL+w7YuXMVuUe/74SQNiJ4l4y2VzFbM6eQ1KVJmFyRpqMRcgDSXUz3MYTftR4v5/wDDt0hzBADD4LGCbQelvfoJ4v4iNbNGpXd2oitPlpEFEdmURYSZNze5OJP2heIqebNGp5CIxSZWoGqaCRAeFgGxIEkibgTdY7sdkHwBxLyc5Tc/C0o3qGFv/uF+mL44dmA6yGU9ivbpa8HHzfleVw6EoA4KFjMHVyk7Axa8YujP8TpZQn+Gp0zU1AMkxqbt1vf6HESdSTvRcVkmktjiqFiVYiwmDsex+V8I3j/xBVy1VKVKqJZNbEjaSQIGwFj3x1pZrOg+cqu4G6gKzKB1UbsOkR7YE5/P5DPMxqU28xBDONaMvMFAMjTOpgII3OM5yvtM6OCMYSTdNfQpZ/xdX1hpgkAMQzQY67mDO8b2tg34R4+zZtNZLKzaObrIgb7XgwNsDfGXhOllqihWeHLiHsQUFM2aIIliJjofTA7wun/qqKk/+6osf6h88S4qtdnXBqTcmvFp0Mni6o5NUUctTYip8aAipSvJDoIYi5hoIKwZx2zWVzFBWejV8xF3DWI+cwe/S2OvG/EBoZhqNSmHNMSKmnmCd9X+DHtfjA8uQpalMSoJmxJDAdNpO3Q9RhQSlKpa/s45ycY3Hf8AQo1ONVuZ3JAYSNU6TvtcSIkCZie+83M8dJEMxB/pBIJkSLEdYURaNMltIjepxg1WCIpQdCCYUd4j+8Hthpy1Lh+kLUpK5H4nWST1OOiXNHj0c8IS5N0Iy8Tq/hrmJP8AMOp/lp6fpjMWfT8P8OIBGXp3/pj++MxPzov4WTOHVtNpJ94P57/XEw5xkeehN/oP7YE5V+YDp7df+MSs3WW8dxP0xNhQxy5HKVjrKz9IIxH4xli1JgDDASHE8sFTtf1x7w6oGQT2FscuM5F6iLofSVJMybiNrYbVojpiZxShBNTSWWrqIE/DBgq5Mnfm6bgbicCDn6+TrjMCnUqMyxAJClei8istresdsMmYr5lGCl1KmQfNY6IIJOowbRePTrhXzNBq7mGWp5asWK6igUWBDEAw0WgCYsbEiUqBsO5H7TKDEiv5lA9TGsewIFvmowI8UePmeqFyp5kY84UMS0HlWSBH8zjvbUMA+LZcpUFBwNRDaiCXKfCV1FzvEyBtM3tjjkOAV/LevRSkNK6SzOZBM86KDMnYSDeRfFJitjVUzeY8pqYzrpX1gajBLCOwtEHdQDYesr3E/E61K1WnmCAANClZYK4hSxYkWIG+ktAUTy4jUa50vVCu0BVE3JaFBPQkdIC2m+IVbh3mMXdYc7gXAiw/IbdwZN8Qval0Se5bM13100bXTdgsWAOmQBI2nuDOxvgpwngvl6ayqZAYMgGopsG6HVvFibHHnBOBipyo5UTJgEnTPxLF+wNrR64duECkaCeVWNXQSGcwCoOwgASCRv7dxCbvo1rqyRwLjtZBTFOsq0riHps+wixGnsdyFEHeJw11cwHqU2mzCDYbzeIJG17E4X+A04Uq2nrN7b7fSPniWcsVq02U2OokH2tc3m/rhtaCLpjdTzIHa1sKviNiMzTqCYamV/7Wn89X5YlGRETfoT+xOOnFsrqoA7snMPluPoT+WHyRcoND45YzTF3xOA1NK0Tp5WHodvof1wiZ/hZzVanSWyIC1Uj8IMR6ajBC/M7DD9UIKaCJD7+g74g8SzVLK0XZVCi7GNyY69SdhjjhJqVo6p8d99EngtJKNOA5o01XlpgD4QeapzghzNyN4MySRhC+0+grN/EQoqeZ5bMqkCpCDmuTdSpE9dW/KMO3AM4lfKpUepuobSTyhgulo7XBEe+K6+0nj616qUafwUQRbYsd/oABPvjp4lLP+TLlccf4BPg3PeVnKDzHPpPs40/3/LF3+KeOGjla1UxKKYP9TSq7epGPnem5BDKYIM+xGxxZf2meIkqZTLU6e9YCq3oALA/9R/8ApjsONlaGp0xznGE49A69P8/bAM7imTYTGLMoV8ucxQqmpzPSXzDIK64XTq7Ec1/XpN62oFyLGw3k2+fbFi8N8LO1KmxqUwWSm8MHBUwDpICnpF/XGXJJxSpWdX6WHHOTU5VosjhfGMuBaoD05QSN+8R+eBXhanTarVzlZ0V8yR5dNmHLSBGiR/M0Bvp1Jwt5hRlKNTzK6sXtTGgi/rJ7bmMV/WztWkWSnUZVk2B39fp2xObbpijxalixo+2DiurOCnBml1JsQ6UyBHSDqPrIwM8IeIDlqulgGU2uolTaWUgE7D4RvbC/Xmopd6hZ5A5pNgDfUT0gAD1w65LgobLisKPmVFootMARqdhOprgELMmcEqaplK+NU1aJPiXOPVrDysulSQUYVactYgiTItJ2JG+OvGMhWFGmoCB0QSq2UPBmAO0gev69PCuQfK09WYqBnNSUVeaGqaVme/t/bAvxF4gCOyEQwPcyN+9iDvP98HEoN1d0Zc0pKNpVZBy1Y0hDmi17hgyk+gKAFZ7mQMSs9mMsKNR0pHzCpjU+pVB/ELyW6AW39MKGb4kC2oAT6TiLXzj1LE2Gyi3/AJxu4w+jnUp/ZMy/Eq4UQxI9f/OMxGUerf8Aaf2xmJpGlsY6/jyoSDTp+We4cz9QAcSqP2isJLUAxO58y59fh9MKWdpJAdDykxp/lPa8n5/tiFGJUIjc5Fn5X7VyqgLlLjqavT/swz8B8T1c/QciilNkrIt6lgCCS0kD2j1xRqYtf7Psg5yNUISGzCuVaAQtSmSE+sE/I4bikibbY6rwMsVqVMxScqOamolWJNiJO4EQY74ncT4czoqh0VgyB3bqqMGn5jCP4X4s/mUkrU3DRDFjBZgouF0j4mMATbHPhPHXzOZzWXrSyVV1UQ2nlencARbe8/04zUl6KxszN8Ny3mVKQAFyWeQwqFzBYMSCea++3Ltibx001yzZcsdApgLHxHSQRpjlaIna/wCiX4ezSNWqCoJUmJYSo1FgdXzKkHaVBtglxTxMisUo62QGzMdZMKLSTA6rI7zeZxm2xpIG1c3UCikJEJc6Y5i5Nh20qARtJNseZVmamztEtADLzGSbat9ybQABFo6yCSVr12P3ZsoN4JMNexAtqj59cDeH8QKoyWKlp2OolYCQegDXI64O0JoePCPF6SU/MqgzOksZOgnr/NHTfqMcfDhSrmqtZEIEEkAW5mm17CQdwJ9cAaGUL1gimEqwFkSA2+w2sNXSNM4tfw/wunQohUB9yZJJ3Y+pwoRt/gcmZlkVTbUvuLXPfr2jBVPiB1csHr15Y/Q47UQsTA3jYfXE1SPQDpjeibB7MTbfrvFv3xsqgiO+JbERiIagDae+398UJipm+C5iiqhV80bDRuO0g+nXbC74x8E5utRJV01LzeWGPNA+HaNU7Xjb3xawYRGONZZxnHhjF2jSXNJxo+fXzhyuSpXYZgs6iix0+WJLCq1PckhuWYGxgxhJnBnxhmWqZ3Mu5k+a49gpKqPkoA+WAwxskZWe6cdqlRmC6mnSulZ6CSY9pJxyjG3TDA0cYk06alR8Wubi0abQR1mZt/hjpTJNsEUpqq3k/t2wAc6eXZ2VVpmXIUQd5MD5zGLR41XzfnVFCqqQNDTuCAVAjcwO1tpwreDsp8deyFVIpAwN+UvJ94kC2+2765ovmCuqCqKqVAQVOgEEkTO5Mkm0fXn5ZrpPZrx+LtqyvuMNXqsGZdKKILN0nrpnraDEG18CMzUD8gW4MK0CQPluPfFmZ7wo1b7xcy5ZV0wGAWzWaRAI+K5FwAO5wqca4AjEaCEqNOpZt7Dt2j98Z5xjVm0fK3EAUdVFlYGZBhosZDDYiCDcT2uMWZ4YY/whqAgavvXWZhSdMfIAmDI6YVMt4VzFb/VqP5SghqrkHTpUkIFZgbelhPuMMHCc/TTh5y1NyXDtrZgVmSNtxFgPr3xoq7FyTuOPtGmaqB6dCoaSKWqCorKpHKrrFpgk2vGFvx9mQ9NDA1a9+sAH/jDxxfNLl8uH1Iq6EQllJgQCQAAZud+8Yr3xXxihWpBVqM9QPI5CAB1uYO0WjE4+aaWiFPwabE/HWgJYe+OWO9OmRf8Ay+OkwCSscZj2jlHKggrfuwH98e4CjqMuXp01KmA4UWPMQTIgDeWYfTBXxfwCoDl9FFifLFM6ATqKQoPafwm/4cHuCLRC1anlw6xsCzSwIbSpMahBIm/bDLw9lUoEXWQYLDc6io5jseQBixkMRY3gZZ0Oit+G+EmVqbZstTpsV5UvUOsNp6GBynvtFpnFr8GWhk8otNWcqrWJuxYsxIAUX+I7A2PvgPXzlOsxVtWkBas6JDqWVkJVfvDERFp0CbEY50cqClN1RiQoJIDAA2JGnYEAAA3O2FKbJoOZ7xCtWsqVNIC8wLRFrEgmD/uW10xX3EMs2Wr1XphajU3RkbW2oiQGFouDuCNjiembZU0V31SdYd7Xkn1kKxADRFtotjlxTJU1h11rTLle/KdPPEC1ibdYtfGObLivQF8S5qm9Z6tJWpozahq0r/LqIBI1c07SPXAOpX1AMovJDLeJtcXtv9flg1xvJU6hRUqgDSCOVmaNhrI2N4MgE8u9sQTwLMQVVRUkgakNl7gzsCDPyxpFp/7FJUa5WsXL0QxIk6EJ6tyzPoLR17WxyrupZoN1aVNhEWm+5JkgC/UendeD1l0lg4lTofopsGHoZJ6TcHHB0Msiw9MtMiLmJJ6EwPf88Vr0SWV4C4cCvnGSBamGM30gTO55bf8AUbDbFhcNUkRO98K/gylGUy4IiUB7bkmfnP54bslbUR8sOKpDs7LYbbfvjvWqdYGPKa/I42rAafnixHJTv74gZknWCOhFukGxP0/TEpmsQMRajE3Ex19MAiY4nEd6Zx3QyoxzdsMTPmPjQ15iu3es5+rtiA1EjE/iQ++q/wC9v1OOaEd8UMhaMOHCPBjZuqxpsFoKQusQdRCrKoPxX3YwBue2FLMP0GLHynielRoU080imEAFNWLVGB/mIMIO6j6jGfJJpeJpxxi35Gni3wIuUpCtQqNUQf6gMEj+oEAAjpEWwkJpqsiDVqLEE9CIGkAAEzv9Rh34l9oCik9ND5pcEAFSFSbDe9uwHucV5lK+morHoZOJg5uLsfIoJ+I30sxXT7oMAWYLoMgUyDE9wSZkbm3bGvDq9UzWKnmHKTu+noFtCyRJFtvbENOHV69TUysASHNQkEBRJJbSfinpYyek4N+K/KW1GjTo03heUc2oTzCOjABge6j55OK6fbFFvsIcL4zqSoiVFZ9JjUSGUzI2/DFiIPzjGlKmDo5tREg2sBMwb+8G2+2FSkQG8ymZMyYMSLCAN49vfD54c8SNVRMuKaCmEKMgDHXCkkyOpO8xfre2b409IcZtSs4ceo/eVClUmoSoNPUNKqV3UWiTeT64EeHuH1PNh20817jrfe49o74ieMss6ZpgkqQgAUbwL7joTO/SO+HLwxx2itHyatKn5qqAHIUktpUapNwdX5kd8awjrYpNXoX/ALVc6NCU1aBq+HuIk/Tk+uKzw3/aNng9WnTUzopy3fXUOog+yaF/6cKSC4x0LozCHDKP4yJjbHtI66jE7DBaugRdEXjpf9P7dxgfwdZDGNzf2jGSnps3x2ooG1XJJnGY2zSjW0d8Zi7FQ20+ItTdxTUg2JgnmuVI36k9+uDKeI0U87GmWY6tS6hU0WkaGMBhEkFpIIGETM5uTFhBA6wYLXPe5J+nbGZdC7cxLQLj+na3QHsP8MqGtkN/RZNDilBRrqVWEEWDWMzBbyxESBAmABFoIxEXPaqvnVnCSRJVlhgpBIifjEA2+FZALExhSq5mVhwHA2ULsJncNzHYXJEAeuJmQ4sULNqJn8LAWEyRBkRfbYziXpCDnibidOqfunQsdOliTym4IBIkcpiwtPeTgJmmanU0OeVTME3MggXMxAmehsY6CJnHFVhpUA7FR2vHbYGD7T1OOdHM6pSpLd1IkkACAJIvsJ+fS84hYxcZrJz1TIdys94jYG1hygWEiJ9Wfw/lXFNXpNKuAxRusgXVuh97H03xX+bqgKoUahaVnqLG59D+Yw8eE+L+XTIdW0UxYhZIAEgNHpN9uUjtMxSu2P0ZxTM1KNUCon3AUA1WAszABm0j4vwkn+qIOOWS8PUa+arZdFCUlZWUr/KkA+t4J3iUFtzgtxmvlMzRZmZmCAyi2a8D4Wib37SMEuFGk9X+IQMJRQt7FStiR3gxfFxSvQt1YWylEIdCiyiAPbBiivJ74EI3NODiLYDGqJO0Y41yOmJAFsR6xthgcNWImZqRPQ/r0/5+WOzN+mIuZcx6YAJuRqSuOlSPpiBwypfE9hfAgPnTx1w8UM9XpJJXUGEm/MoaPYFiB6AYX6k9sP8A9smWK51Hj/Uor8yrMD+WnCLrn/jFoCEwx7ptMj2x0rLjhgA9wyeHfDjV3WWUcw5bkmb80bDp3v8APAfheTatVSmi6mZgAJie8noI64sPI5N0zDFIN1B0zBMAvpmNQHMJ+knGXJJrSGidxDImjFCmAUC8gkb2BSO7AtJ6gfPC9lB5oJ0sfL2BnYWBuLwGMH0wxZDhFMhfNqFlqwseZOlkOyMTOrVqgzAgxIEY75jKU8tUq1WuonQAxgRAggz+ImxMEkAQDjnxKF7K+GK2kMKMgS2piNQsA8C676rA+o6wxcJSnTQ1cvTmqUaaKqNUzM2g30i0D6nEDifHaYSotOuoqpcWgag4Ok6pEcxk9CZgADAv/wDNBHUMxh2VnCqpe0AAyCwncqQx39sXT7EM/Es3RzBDOq66WnURys0fgJIUxuO0z1GIHF6mXpUmqUQdZUIwDANuy6jYEP3AG87YX+I8Qfy6fMioTFMLpZ1K3OoHmJ5tJc9gYnAbK5Ws5ZUhyy6viUmJJkmbWBJn0tJGHFPsJP0cuI5KpU1VDqkHZpkjcQNIAtv0nAilTIKkgwSOm+374KHNHUpJJAIkGTqFjFu4jr3x5Uy+tywJRVMgMDYD06HaRNpxom62SuyZxZiiU5sZHyi84Y/D3hhPLBbMUlNTnVAdR0kLEkEAEkxAnr2xEThX8Y6hQqOosCZ7WgXk2gb/ACwy5DLU8tUNLTTLmio1nrUGrUoBL9ILQY29MYrcaOhyxlkhZzngbMs7MKSiT1YD579d/njMO/ku3MaOYUncBwAD1ABW18Zh0/sPl/CKpr5hjVIRFGwgKBuOsdbwScc6jxypFm5hP0PqN7euOqlQ40qVLbgmdItb5xN7jbEUuNQZhMCIJi36n5fXGiMTjTzBJmT7dfT3GC2XErqcEgmI0yYHUddv8vgbSr6TaB6gRI+d/wA8ernWB1Swb37flhyViNcxV8tzpMnYz84I+UYLZfP06w+8IDC5JH1I9fQYH1Nb3K7CWVh07gHb1j5dh2q5JCpanIYAQvS8bE3BvF59xhSSfYE6q9L4WckExGi0RBE6h33GOlM1CrKgLqgljcctyJHyn0viNwqm1QkmkKnlDW6tYlUIDrFu8n0DYsXKcPp0swnlgNTzSDQ0idKhWVgDvCsRB6U79sTguhtibwrIVqyzYIXCCo91lhZWE6ryBPqPbFneHuEPQpKtRgzKIkSBA9D9MdfDHhynRy7UTzKzvqm0lWKBh2MKCOosZ64L5kaRvJi5Niekn1tioxxE5WR6REicG8t0GwjbAOjvg1kjN8WhE/EXMHl2jEljiDmH5fn+WGBArvtiLWe2Pc0+2I7vhAdsi8N/nTB04Wsq1xg9RqDSPTABWf245H7vL1h+F2Q/9QDD/wDQ/XFVow0wFgzJaekfCB7yZ9toveP2sup4dWkTzJpjoda3+k4ommffFID2uoAOIWJmaqhiYBC9ATMfOBPvGIhGGA48ESkEpVqBZKqoyVNVxrJABE2upIj2n1lcT8QO6+VS00tBUgU9U26jm0nYHa8+px08DcD1Uahqq33pBpD0UEs4HU6WtYxvsRPLjnCfIqDylMmRytJnlhWYEgzJkbfCO4xg4vIu0yZxPi1LyaCeWUcAMCFUKrltUAQwgEljA6kDfELiHiasrNprU3EaQQSQBYhtQi/5iSJtgRn8oyPMs9NeVKmkgTpBgT0E/wCRjhxCuppogEttqi5AuTH+4keyYMdhZpnXp9FdidmcQStoJg77i57e2JHDyoKkgO1RwvMLX97Wt7z0vjlXpItBfvENRiWgGSAPwntIuPaMCxUM97R7f+MVVoloN16jHVTFPUKLM5anEKJIMGNj79LYh1CA+tSSqxIe3SdJFxEggbzG2JGY4a1KlSarcVCrov4XQgTzgyI2Ii0gziHUyh0lkMqPiUnmQ7XFp9GGEqG0EGrJVRlKoOZn1KSCT1gQR1mANrWtgjS4CgoLXqVKilwdCACYmzMT0NyFAuOonCpTdiAsmJkAd/TDceHVwtAuIVwaikkQAoJhuoJFzPVp6nClpaEdeFZh6VfzUOuqxiIAUgBtRMgiQs9zO2JtPO661B6LOwp6nNNRPl6iIvGksw1yBp9L7qiunLKvcEmCLCSB/t2uN9o7450eIshI1EzeAYv0nvGJUWOyy28XaSR5bGCRy1gV36GPy6bdMZirJqev0P7YzFU/smyR/DktAax6n27f+Plj2nWUggCREgsN4In2kTjMZhjZK4bw6i5JbVygkqCQYG8HY+1seZDKUxmEVuamTygi7TFtrXN57euMxmCwGPi2h8rLiKiELq7kaFO09GwCoZefJAcFnABEGFDNCsdp6WGMxmJkV6HPh/h1aebNIiZpzrYyT94QCY6wFJPUSOuCOXyXl18kn/w13pqSZhXpGqR8gAv1x5jMaJEse6OYU2X8JgiIE/T1xG4hVk4zGYPQn2c6WDOQ2GMxmGImscDs0bHGYzDGA86+2I5fGYzCGjagb4KIJxmMwexMX/tEdVyGY8wAqVULEzr1DST6BoP1xQWvGYzFIDUkY1GMxmGBf/AuGpSy9J7ebToaFcCw1QSQO5MX9MJviniVM1vIFO6gDV32B+XLp9YBx5jMZS6GgY7NVpFQUYglNMEXYjmNgCQOs+lwAcK9Xa1iDBHzBt+uMxmFEGeV6KqgGk6ybNqtHTl9vXrjhlqwVp0qwgjSwtcET8pkeoxmMxa6GTKGYhBzEsveTAtCi+x3OPKNPUGZeUos26yQs/nf2xmMxIIzIZsU3FQRqXblG8G8bYY+HeIS9IUq7y4dG1NqYMF18zb3BKbAGF6zbMZgaQEWvm0FWq5VHUalGpTBcbGAZ5iI32N8QQhqDW1MGmEYymmmIBN4AmASBcEnGYzCQgVnGLMTBvHX0GPcZjMVYj//2Q==" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Wedding Package</h5>
          <p class="card-text">
            "we specialize in capturing the magic of your special day through our lens. 
            With years of experience in wedding photography, we understand the importance 
            of preserving every precious moment. Our dedicated team of skilled photographers 
            is passionate about creating timeless memories that you'll cherish for a lifetime."
          </p>
          <a href="weddingpackage.php" class="btn btn-primary">View Package</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://iso.500px.com/wp-content/uploads/2020/08/stock-photo-240662573.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Portrait Package</h5>
          <p class="card-text">
           " we specialize in capturing the essence and personality of individuals through our 
            portrait photography. Whether you're looking for professional headshots, family portraits, 
            senior photos, or something unique to your style, we're here to turn your vision into stunning, 
            timeless images."
          </p>
          <a href="potraitpackage.php" class="btn btn-primary">View Package</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img src="https://images.unsplash.com/photo-1585543210219-e2be0092bad2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDE1fHx8ZW58MHx8fHx8&w=1000&q=80" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Event Package</h5>
          <p class="card-text"> 
            "We have years of experience in event photography,
            working with individuals, businesses, schools and charities,
            covering everything from small parties and celebrations through to large corporate events."
          </p>
          <a href="eventpackage.php" class="btn btn-primary">View Package</a>
        </div>
      </div>
    </div>
    <!--add feedback carousel-->
    <h3 class="feed">Customer feedbacks</h3>
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner feedback">
        <div class="carousel-item active">
          <div  class="d-block w-100 flex-centered">
              <h1>Hey there!</h1>
              <p>See what our loyal customers had to say...</p>
              <!--<img src="..." class="d-block w-100" alt="...">-->    
          </div>
        </div>
      <!--add database data to feedback carousel-->
      <?php 
        $sever_name = "localhost";
        $db_uname = "root";
        $db_pass = "";
        $db_name = "malcolm_db";


        #DB connection srting
        $conn = mysqli_connect($sever_name, $db_uname,$db_pass,$db_name);

        if (!$conn){
            die("Connection failed: " . mysqli_connect_error());
        }else{
          //use below code to update database
          $sql = "SELECT `user_name`, `f_text` FROM `feedback_table` JOIN `logintable` AS `lt` ON `feedback_table`.`user_id` = `lt`.`user_id`;";

          $result = $conn->query($sql);

          if($result->num_rows > 0){

              while($row = $result->fetch_assoc()){

                $username = $row["user_name"];
                $ftext = $row["f_text"];

                echo"
                <div class='carousel-item'>
                  <div  class='d-block w-100 flex-centered'>
                      <h1>$username Said..,</h1>
                      <p>$ftext</p>
                  </div>
                </div>

                
                ";
              }
            }
          }
      ?>
      </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!--footer-->
    <div class="footer bg-body-tertiary"  data-bs-theme="dark">
      <nav class="nav flex-column" style="width:max-content;">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="aboutus.html">About US</a>
        <a class="nav-link" href="contactus.html">Contact Us</a>
      </nav>
      <div class="w-100 social-container">
      <div class="social"></div>
      <div class="social"></div>
      <div class="social"></div>
      </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</html>