package Tests;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import Framework.BaseTestCase;

public class DonationTests extends BaseTestCase{

	public void testDonate() throws Exception {	
	WebDriver driver = drivers.get(0);
	String baseurl = "https://jachievement.herokuapp.com/";
	driver.get(baseurl);
	
	    WebElement donateNowLink = driver.findElement(By.linkText("Donate Now"));
	    donateNowLink.click();
	 
	    WebElement amount_1250 = driver.findElement(By.xpath("//input[@value='5000']"));
	    amount_1250.click();
	    Thread.sleep(2000);
	    
	    WebElement firstName = driver.findElement(By.id("firstName"));
		firstName.sendKeys("John");
		Thread.sleep(2000);
		
		WebElement lastName = driver.findElement(By.id("lastName"));
		lastName.sendKeys("Smith");
		Thread.sleep(2000);
			
	    WebElement address = driver.findElement(By.id("address"));
		address.sendKeys("1234, 72nd St");
		Thread.sleep(2000);
	
		WebElement city = driver.findElement(By.id("city"));
		city.sendKeys("omaha");
		Thread.sleep(2000);
	 
		WebElement state = driver.findElement(By.xpath("//select[@id='state_id']/option[@value='28']"));
		state.click();
		Thread.sleep(2000);
						
		WebElement zip = driver.findElement(By.id("zip"));
		zip.sendKeys("68124");
		Thread.sleep(2000);	
							
		WebElement companyPhone = driver.findElement(By.id("companyPhone"));
		companyPhone.sendKeys("421-308-9761");
		Thread.sleep(2000);	
								
		WebElement email = driver.findElement(By.id("email"));
		email.sendKeys("abc@xyz.com");
		Thread.sleep(2000);		
									
		WebElement chkbox = driver.findElement(By.xpath(".//*[@id='anonymous']"));
		chkbox.click();
		Thread.sleep(2000);
								
		WebElement savedonate = driver.findElement(By.id("save"));
		savedonate.click();
		Thread.sleep(1000);
	}
}
