
# POST-A-THING 

<p align="center"> <a href="https://laravel.com"><img width="150" src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg"></a> <a href="https://sass-lang.com/"><img width="70" src="https://upload.wikimedia.org/wikipedia/commons/9/96/Sass_Logo_Color.svg"></a> <a href="https://vuejs.org/"><img width="50" src="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg"></a>(just a little bit of it) <p>

 
Simple app built with laravel to learn the principles of the framework. I have also built one Vue component that retrieves the data from API located in route /api/comments
```php
`Route::get('/comments', [CommentControllerApi::class, 'index']);` 
```
Thanks to the resource located in `/app/Http/Resources` you can choose what data to show when someone requests for it from the API.
```php
    public  function  toArray($request)
    {
	    return [
	    'id' => $this->id,
	    'username' => $this->username,
	    'comment' => $this->comment,
	    'created_at' => $this->created_at,
	    'urgency' => $this->urgency,
	    'contact_methods' => $this->contact_methods
	    ];
    }
```
By using Axios it can be easily transformed into array of data within Vue component.
```javascript
	export  default {
		data() {
			return {
			comments: []
			}
		},
		mounted() {
			axios.get('/api/comments')
			.then(response  =>  this.comments = response.data.data)
			.catch (function (error) {
				console.log(error);
			})
		}
	}
```
For login and registration I have used standard Vue auth scaffolding generated with
```php
php artisan ui vue --auth
```
One thing I have customized in the registration form though was adding a phone number (+verification) to the user so it can be shown on the user detail screen.