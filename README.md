# redirect2
> Simple service to redirect page.
> Some of the web service doesn't allow redirect using custom protocal, you can use this as a workaround.


### Usage.

client side redirect (won't keep history, when user clicked back button, it will go to previous page)

```
http://redirect2.herokuapp.com#{your url without encode}
```

or server side redirect (keep history, user will need to click the back button twice to go to previous page)

```
http://redirect2.herokuapp.com?{your url without encode}
```



[![Deploy to Heroku](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/ste80/redirect2/tree/master) [![Deploy to Azure](http://azuredeploy.net/deploybutton.png)](https://azuredeploy.net/)
