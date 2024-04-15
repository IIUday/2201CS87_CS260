-- General Instructions
-- 1.	The .sql files are run automatically, so please ensure that there are no syntax errors in the file. If we are unable to run your file, you get an automatic reduction to 0 marks.
-- Comment in MYSQL 
select player_name from player where batting_hand="Left-hand-bat" ORDER BY player_name;
SELECT player_name, FLOOR(DATEDIFF('2018-12-02', dob) / 365) AS age FROM player where bowling_skill="Legbreak googly" AND age>28 ORDER BY age DESC,player_name;
select match_id,toss_winner from match where toss_decision="bat" ORDER BY match_id;
SELECT over_id, runs_scored FROM batsman_scored WHERE match_id = 335987 AND runs_scored <= 7 ORDER BY runs_scored DESC, over_id;
select player_name from player where player_id=(select bowler from ball_by_ball);
select match_id,team-1,team-2,win_margin,name from match JOIN team where win_margin>=60 AND match_winner=team-id ORDER BY win_margin ASC, match_id;
SELECT player_name FROM player where FLOOR(DATEDIFF('2018-12-02', dob) / 365)<30 ORDER BY player_name;
SELECT match_id,SUM(runs_Scored) as Total from batsman_scored GROUP BY match-id;
select player_name,count(kind_out) wicket_taken JOIN player Where player_out=player_id GROUP BY player_name;
select kind_out as out_type, count(kind_out) as number from wicket_taken GROUP BY kind_out ORDER BY number DESC,kind_out;








