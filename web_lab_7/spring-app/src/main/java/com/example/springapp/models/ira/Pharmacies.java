package com.example.springapp.models.ira;

import javax.persistence.*;
import java.util.Objects;

@Entity
public class Pharmacies {
	@GeneratedValue(strategy = GenerationType.AUTO)
	private int id;
	private String location;

	@Id
	@Column(name = "ID")
	public int getId() {
		return id;
	}

	public void setId(int id) {
		this.id = id;
	}

	@Basic
	@Column(name = "Location")
	public String getLocation() {
		return location;
	}

	public void setLocation(String location) {
		this.location = location;
	}

	@Override
	public boolean equals(Object o) {
		if (this == o) return true;
		if (o == null || getClass() != o.getClass()) return false;
		Pharmacies that = (Pharmacies) o;
		return id == that.id && Objects.equals(location, that.location);
	}

	@Override
	public int hashCode() {
		return Objects.hash(id, location);
	}
}
