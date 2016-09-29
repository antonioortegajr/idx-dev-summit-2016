## Query

We have all made API calls now. SO now that we are all used to APIs
let's looks at the new stuff.

The most common question we get in regards to the API is the question of Raw data

The answer has always been that is something we don't do via API.

As of version 1.4.0 developer partners can.

Like the twig template offering we just looked at this for developer partners ONLY.

You will need a developer partner ancillary key to make these calls.

Another important thing to keep in mind is this isn't really production ready.

Again like the details templates you create we are looking to involve you in the
process of making this offering into something more stable and beneficial for everyone.

This will change and evolve. Currently the normal rate limits apply. As such there is
no additional charges for this offering. That is the main reason this is not really production ready.

Even with 750 calls per hour a large traffic website might hit that limit quickly.

That doesn't mean you can't start developing using this method right now. It jsut means
keep the rate limits in mind.

Pricing for higher API rate limits are to be decided and I believe that have the
partner network develop on this will help us find the best way to address raised rate limits

MLS compliance is a huuuuge concern. Possibly the largest. Mores so than the twig details pages as
with twig templates we still have a way to inject any disclaimers that were omitted.

With this API we do not have that ability. Once the API return goes out it is up to you to be in MLS
and IDX Broker compliance. We will be passing disclaimers in the API call.

I really can't stress enough how important these are. At IDX Broker we have a string commitment
to keeping our pages in compliance at all times. When an MLS lets us know about an issue it becomes
top priority. For the benefit of our clients, partners, and ourselves keeping in MLS compliance
is paramount.


Always remember that any MLS can shut down their feed at any time. This means the data you consume
could go away if any MLS decides they do not like how data is displayed, or they don't like what you are doing with the data, or they don't approve of having an RESTful API style feed available.

For this reason we ask you always treat MLS compliance as a serious matter. The developer channel
can help. IF you are looking to develop something on a data set, let us know and we can provide an
 example of a current results page for reference. Basically we give you and example and you just
  add any and all disclaimers where we do.

  Further questions will be addressed as needed on a case by case basis.

  Caching is also important. This can save a lot of API calls. For example if you have a Query
   that will be called many times over on your site you can cache the results and serve the
   cached version the next time the query is called. Something like a query to a particular
   subdivision. The results will not change hourly So why use an API call every time?

   To see when an MLS does have updated data the there are already exists a method in all versions
   of the API to see when the data was last refreshed.

   You won't always be able to cache and your caching layer may even differ from project to
   project, but keeping this principle in mind will pay off in performance and more so later
    when we can offer more API calls, for a price...


    All of what I just said will also apply to the listings API call. 1.4.0 allows for the calling
    of data for a particular property, by listing ID. Not unlike the featured listings call, but
    but now for all listings in a data set.

    These methods and their returns may change as we discover usage and any and all compliance issues.

    Before we get back into the console for the code workshop. I want to ask Allen McN up to the stage to speak about how all this came to be and the role the Agent Evolution has played.

    Allen.

    (Allen speaks for 10 min?)

    Ok for this lesson we are going to build a search results page. In this results page we will offer a link to the details for each result.

    Let's look at what we need.

    PHP and cURL again.
    Client and a partner key as this method is for partners only.
    The new endpoint
    we can create a form to search.

    Ok let's code.

    Now we have some PHP that is a lot like the featured example. The endpoint is new.
This is only available in version 1.4.0.

Let's start there.

For this example we are going to keep it simple. High price and low price.
These are passed via the API endpoint. Much like search pages do.
A question mark begins the delineation and ampersands seperate the key and value
pairs.

This is meant to be like the already familiar saved link creation.
High price and low price are core fields, however advanced fields can be passed.
There is already a method for getting all advanced fields in an MLS. This has been available
in previous versions.

Calling the API much like we did before with featured listings we get JSON.

We will work with this in the same way.
