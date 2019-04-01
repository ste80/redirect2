# redirect2
> Simple service to redirect page.
> Some of the web service doesn't allow redirect using custom protocal, you can use this as a workaround.


### Usage.

client side redirect (won't keep history)

```
http://redirect2.herokuapp.com#{your url without encode}
```

or server side redirect (keep history)

```
http://redirect2.herokuapp.com?{your url without encode}
```



[![Deploy to heroku](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/ste80/redirect2/tree/master)
