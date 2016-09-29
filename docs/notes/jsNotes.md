#Notes for JS slides

Working with javascript. I get a lot of question on customizations.

They range from simply changing a label or the order of a pick list to rewriting
a page conditionally. Often the person is seeking a CSS way to achieve this.

This isn't really what CSS does. Where the ability of CSS ends JavaScript takes over.

 It's been around since 1995. Meaning it's old enough to enjoy one of these API IPAs.

Annnnd now everyone feels old.

All modern web browsers support javascript. Try going around
with it disabled sometime. Not fun.

Heck google is now even indexing like html to some degree. I have tested this. It's true.

Why should we embrace JS as IDX Broker developers?

We are already applying CSS, why another layer?

The main reason is it's power on the client side. It's a language that is already dominating the
web developer landscape. For a lot of front end web developers and designers JS is something that we have worked around, but never really tackled.

Even with out handling JS directly the popular frameworks and libraries are everywhere.

This is just a few. Beyond the front end we get node.js running the back end now. So we have stacks
 running JS from front end to back end. Throw in some NoSQL and now we have a full stack with JS
 principles end to end.

We won't being going to these libraries or any node.js today. Instead we are focusing on the DOM.

What the DOM actually is is a longer talk, bur for today let's think of it as the rendered source code you would see in your browser developer tools.

So for the first workshop of the day we are going to add JS to a details page. Then we will add more and more changing the look of the images and map.

If you have never done JS before. Consider this a sort of crash course in DOM manipulation.

We won't be going that deep into javascript in fact we are just going to abuse DOM rewrites
for the sake of illistrating how easy and powerful it can be.

Before we get started let's look at the reason to add custom JS to a details page.

We can serve up content we think our visitors will like.

In this example we are pretty sure everyone likes waffles.

But in reality we know that is not true.

We can sill accommodate those that do not by offering more options. Scroll down and choose if you
like pancakes or french toast instead. Clicking on either of these words will change the image for
each individual we don't have to visit more pages or even refresh the page we are on.

In an online time where attention spans are getting shorter and shorter the time even to reload
 a page can be too long.

So we can use Javascript to serve a more personalized experience based on events in the DOM.

Don't worry about keeping up or typing a lot of code as each section of this work shop can be simply
imported.

So feel free to try any coding you javascript like. If you get lost or write some javascript
that doesn't work you can just import the code for the next section and be all caught up.

Let's code.


#Notes for JS lesson

##First

Here we have a details page. This is a normal plain details page from IDX Broker. Nothing really special about it.
If you scroll to the bottom you will se an comment note saying IDX javascript. This is good as these comments
help troubleshoot JS issues and make code more readable to humans. If you scroll up to about the 750 line you
will see javascript already being applied and contain comments. Since it's possible scripting you apply
to IDX pages living beyond your relationship to the client comments will help others understand what you code does.

Also future you might not remember. Today me has often been angry with yesterAntonio's lack of comments.

Comments don't really hurt anything. Scroll back down and add a script tag with a comment.
After the opening script add slash slash and whatever text you like and run.

If you already know how to make comments and use javascript feel free to use the tweet button
in the console to troll me on twitter.

Well that was fun.

Keep commenting in mind and your support and IDX support will thank you.
Let's load up the next section and add some real javascript.

##Second

We see that the html comment has changed to My Javascript and in my script tag I have comments.
I have declared some variables.
inside the script tag var the variable name equals the html from a specific div element. Specified by ID.

We are using document to declare we are working in the DOM a period to bind this to the next function
getElementBy() where we specify what element we are targeting. Binding to innerHTML states we want the contents of that div
not the div itself.

So moving forward newDiv represents the inner html of the div element IDX-Details-Row.
