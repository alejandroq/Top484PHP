CREATE TABLE Elements (
	--doens't currently exist. composite address
);

ALTER TABLE GeneralUser 
ADD COLUMN CreateDate TIMESTAMP NOT NULL

ALTER TABLE GeneralUser
ADD COLUMN token TEXT NULL

ALTER TABLE GeneralUser
ADD COLUMN General_User_ID INT AUTO_INCREMENT NOT NULL
