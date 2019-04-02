# redirect2
> Simple service to redirect page.
> Some of the web service doesn't allow redirect using custom protocal, you can use this as a workaround.


### Usage.

client side redirect (won't keep history, when user clicked back button, it will go to previous page)

```
https://redirect2.herokuapp.com#{your url without encode}
```

Sample 
* [Full url - https://redirect2.herokuapp.com#https://github.com/ste80/redirect2](https://redirect2.herokuapp.com#https://github.com/ste80/redirect2)
* [Full url with query - https://redirect2.herokuapp.com#https://github.com/ste80/redirect2?whateverparam=a%20b](https://redirect2.herokuapp.com#https://github.com/ste80/redirect2?whateverparam=a%20b)
* [Full url with hash - https://redirect2.herokuapp.com#https://github.com/ste80/redirect2#otherhash](https://redirect2.herokuapp.com#https://github.com/ste80/redirect2#otherhash)
* [Relative url - https://redirect2.herokuapp.com#/ste80/redirect2](https://redirect2.herokuapp.com#/ste80/redirect2)

or server side redirect (keep history, user will need to click the back button twice to go to previous page)

```
https://redirect2.herokuapp.com?{your url without encode}
```

* [Full url - https://redirect2.herokuapp.com?https://github.com/ste80/redirect2](https://redirect2.herokuapp.com?https://github.com/ste80/redirect2)
* [Full url with query - https://redirect2.herokuapp.com?https://github.com/ste80/redirect2?whateverparam=a%20b](https://redirect2.herokuapp.com?https://github.com/ste80/redirect2?whateverparam=a%20b)
* [Full url with hash - https://redirect2.herokuapp.com?https://github.com/ste80/redirect2#otherhash](https://redirect2.herokuapp.com?https://github.com/ste80/redirect2#otherhash)
* [Relative url - https://redirect2.herokuapp.com?/ste80/redirect2](https://redirect2.herokuapp.com?/ste80/redirect2)



[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/ste80/redirect2/tree/master) [![Deploy to Azure](http://azuredeploy.net/deploybutton.png)](https://azuredeploy.net/)
