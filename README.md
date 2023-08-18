# twitter-from-wish - /v.0.1/
### Whats it about?
It's a twitter inspired webapp. Users can create account and tweet.
People can also be added as moderators. It's written in PHP with an interesting limitation.
No databases were allowed. Instead, I had to make my own *markdowns* to ***make it work***.
### How to install?
Essentially, just clone the repo into your apache/nginx/php -S folder, clear the `tweets.txt` and `users.txt` files and launch the server. It has no dependency
### The markup..
The markup - or rather the two markups - I made are pretty bad. Here's their syntax:<br>
- **The `users.txt` markup:** - `username1;password1;admin1;suspended1|username2;password2;admin2;suspended2|..`
- **The `tweets.txt` markup** 
```
name1|||tweet1
;;;
name2|||tweet2
;;;
and so on..
```
### Features to come
- actually working admin UI
- passwd encryption
- responsive design

### Where to try?
Currectly, there is **one working mirror** - `https://lportf.eu/redirect/?r=0`
