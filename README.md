# USA Zip Api

## Test Task

### v 0.1

#### alexandr.dubovis@gmail.com


# Installation

### run:
`
git clone https://github.com/bmwsauber/zipApi.git
`
## TODO

* Critical:
    - [ ] Tests
    - [ ] Request validation class
            
            `App\Http\Requests\AddressByZipRequest`
            `App\Http\Requests\AddressByCityRequest`
    - [x] Error handling App\Exceptions\Handler
        - [x] 404
        - [x] 422
    - [ ] Response class 
    - [ ] Where statement
    - [ ] Docker auto deploy 
        * Docker
        * Linux
        * Windows
    - [ ] Comments
    - [ ] Documentation

    App\Http\Controllers\AddressController
  
        getAddressByZip(int  $zip) : JsonResponse
        
            Parameters
                $zip - zip code (5 digits for USA)
            
            Return Value
                JsonResponse - Address Collection in JSON Format
  
        getAddressByCity(string  $zip) : JsonResponse
  
            Parameters
                  $zip - zip code
          
          Return Value
              JsonResponse - Address Collection in JSON Format
    - [ ] TODO
        * Add possibility to choice via JSON / XML.
        * Add authorization.
        * Add possibility to turn on "maintenance state".
        * Add downloading CSV.
        * Add CSV validation.
        * Add CSV mapping.
        * Improve "Update" method.
        * Turn off excess modules (optimization).
        * Migrate (add for front-end) to document-oriented database. (optimization).