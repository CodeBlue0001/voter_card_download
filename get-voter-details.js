// Express.js example
app.post('/get-voter-details', async (req, res) => {
  const { voter_id, date_of_birth, gender } = req.body;
  const voter = await db.collection('voter_data_collection').findOne({
    voter_id,
    date_of_birth,
    gender
  });

  if (voter) {
    res.json({ success: true, data: voter });
  } else {
    res.json({ success: false, message: "Voter not found" });
  }
});
