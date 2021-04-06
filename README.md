# USA Zip Api

## Test Task

### v 1.0

#### alexandr.dubovis@gmail.com


# Installation
First of all your need to clone the repository.
Run this command in your CLI.
* `git clone https://github.com/bmwsauber/zipApi.git`

Go to the project folder.
* `cd zipApi`

And run this command (Docker must be installed)
* `sudo docker-compose up -d` 

After that just run the bash script:
* `docker exec -it zip_api_php sh update.sh`

It will do all further necessary steps: composer install; migrations; and even run tests.

# Usage

The project will be available on **localhost's** port **8032** by default. (You can change port number in docker-compose.yml file)


Now we have **3 endpoints** to our API.

* Getting addresses by **zip code**:
```
http://localhost:8032/api/v1/addressByZip?zip=00612
```

* Getting addresses by **city name's first letters**:
```
http://localhost:8032/api/v1/addressByCity?cityLetters=New
```
* But our database is empty yet. So let’s fill it up with data.
```
http://localhost:8032/api/address/update
```
# Public Method Reference 
* App\Http\Controllers\AddressController
```  
    **
    * Get Addresses Collection via zip code (USA)
    */
    getAddressByZip(AddressByZipRequest $request) : JsonResponse

        Parameters
              AddressByZipRequest $request 
               - valid zip code is expected


        Return Value
              JsonResponse 
              - Address Collection in JSON Format
```
```
  **
  * Getting address' collection by City's name first letters
  */
  getAddressByCity(AddressByCityRequest $request) : JsonResponse

      Parameters
            AddressByCityRequest $request 
            - valid first 2 or more city name's letters is expected   

        Return Value
            JsonResponse 
            - Address Collection in JSON Format
```
* App\Http\Controllers\AddressImportController
```
     
    **
    * Start database updating proccess
    */
    updateAddressesCsv() : JsonResponse
        
        Return Value
            JsonResponse 
            - Uploading proccess status


```
# TODO
    
- [ ] Add possibility to choice via JSON / XML.
- [ ] Add authorization.
- [ ] Add possibility to turn on "maintenance state".
- [ ] Add downloading CSV.
- [ ] Add CSV validation.
- [ ] Add CSV mapping.
- [ ] Improve "Update" way.
- [ ] Turn off excess modules (optimization).
- [ ] Migrate (add for front-end) to document-oriented database. (optimization).