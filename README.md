# Smart Copy Paste (for Magento)
Magento extension to add custom text to buffer on copying content on the site (by [BroSolutions](http://www.brosolutions.net) 

You probably have seen many sites that add some text to the buffer, when you copy anything form theis site (something like blablabla " for more info check http://www.brosolutions.net ).
We allow to define custom text in magento admin (system->config->Brothers Solutions->Smart Copy Paste) and add it to the bufer with JS

```javascript
document.addEventListener('copy', function (e) {e.clipboardData.setData('text/plain', selectedText);))
```

Ready to install module in archive BroSolutions_SmartCopyPaste-0.1.0.tgz

Will be glad to get any feedback to contact@brosolutions.net
Thank you in advance,
Alex Silenko


