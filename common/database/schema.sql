CREATE EXTENSION pgcrypto;

CREATE TABLE representatives (
	id SERIAL PRIMARY KEY,
	name VARCHAR,
	active boolean DEFAULT TRUE,
	party INTEGER NOT NULL REFERENCES parties(id) ON DELETE CASCADE ON UPDATE CASCADE,
	type VARCHAR NOT NULL CHECK(type IN('Senator', 'Representative'))
);

CREATE TABLE parties (
	id SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL
);

CREATE TABLE bills(
	id SERIAL PRIMARY KEY,
	name VARCHAR NOT NULL,
	code VARCHAR NOT NULL,
	sponsor INTEGER NOT NULL REFERENCES representatives(id) ON DELETE CASCADE ON UPDATE CASCADE,
	description VARCHAR NOT NULL,
	full_text_link VARCHAR,
	track_link VARCHAR,
	congress VARCHAR,
	status VARCHAR
);


CREATE TABLE reports(
	id UUID PRIMARY KEY DEFAULT gen_random_uuid(),
	bill INTEGER NOT NULL REFERENCES bills(id) ON DELETE CASCADE ON UPDATE CASCADE,
	representative INTEGER NOT NULL REFERENCES representative(id) ON DELETE CASCADE ON UPDATE CASCADE,
	knowledge INTEGER NOT NULL DEFAULT 0,
	support INTEGER NOT NULL DEFAULT 0,
	sponsorship INTEGER NOT NULL DEFAULT 0,
	understanding TEXT,
	position TEXT,
	similar_legislation TEXT
);
