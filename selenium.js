const { WebDriver, Builder, By, Key, until } = require('selenium-webdriver');
const fs = require('fs');


(async function example() {
    let driver = await new Builder().forBrowser('firefox').build();
    try {
        await driver.get('http://www.google.com/ncr');
        await driver.findElement(By.name('q')).sendKeys('ATDD', Key.RETURN);
        await driver.wait(until.titleIs('ATDD - Google Search'), 1000);
        //await driver.saveScreenshot('page.png')
        await driver.wait(driver.sleep(10000));
        await driver.takeScreenshot().then(
            function (image, err) {
                //Screenshot will be saved under current directory with name myscreenshot.png
                fs.writeFile('screenshot.png', image, 'base64', function (error) {
                    if (error != null)
                        console.log('Error occured while saving screenshot' + error);
                });
            }
        );
    } finally {
        await driver.quit();
    }
})();