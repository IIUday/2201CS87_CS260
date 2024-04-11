-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
select player-name from player where batting-hand="Left-hand-bat" ORDER BY player-name;
SELECT player-name, FLOOR(DATEDIFF('2018-12-02', dob) / 365) AS age FROM player where bowling-skill="Legbreak googly" AND age>28 ORDER BY age DESC,player-name;
select match-id,toss-winner from match where toss-decision="bat" ORDER BY match-id;
SELECT over-id, runs-scored FROM batsman_scored WHERE match_id = 335987 AND runs-scored <= 7 ORDER BY runs_scored DESC, over_id;
select player-name from player where player-id=(select bowler from ball_by_ball);
select match-id,team-1,team-2,win-margin from match where win-margin>60 or win-margin=60 ORDER BY win-margin ASC, match-id;
SELECT player-name FROM player where FLOOR(DATEDIFF('2018-12-02', dob) / 365)<30 ORDER BY player-name;




