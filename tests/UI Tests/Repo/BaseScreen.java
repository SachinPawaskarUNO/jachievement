package Repo;

class BaseScreen {
	//Possible Values: { Test | Dev }
	public static String Env = "Test";
	
	public static String getURL() {		
		if (Env == "Test") {
			//NOTE: Never put a trailing / on this URL.
			return "http://jachievement.herokuapp.com";
			
		} else {		
			//NOTE: Never put a trailing / on this URL.
			return "TBD";
		}
	}
}