Twitter Links Prism
===================

Prism is a little app that watches your timeline and will help you write a link blog.

How It Works
------------

This is in the conceptual stage right now. This might change, but this is the idea.

Prism is a multi-tenant app, which means multiple users *can* use the same installation, but that is optional.

Prism will watch your tweets after you register with the app, and then log into your Twitter account so Prism can receive a token for your Twitter account. Then, Prism will periodically check your Twitter timeline for new Tweets that have a single link embedded within them. When it finds those Tweets, it will put them in the *Ideas* section.

There are *three* section:

- Ideas: the initial raw Tweets with links
- Drafts: Ideas/Tweets that have been developed upon, basically, you accepted these links as a seed for an actual post, and you are in the process of writing more about your thought
- Posts: the finalized link blog items, complete with links and your thoughts, and easy access to the original tweets

Why?
----

I like Laravel, and I wanted to experiment with the Twitter API. Plus, since I began working on [The Nexus](http://thenexus.tv) CMS development, I have learned more concepts that Laravel offers, and I wanted to give those a try.

Will this ever get done? Maybe. We'll see. Keep pestering me.
